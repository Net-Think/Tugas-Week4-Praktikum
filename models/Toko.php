<?php
include 'config/Koneksi.php';
class Toko
{
    private $db;
    public $nama_toko;
    public $deskripsi;
    public $jenis;
    public $rating;
    public $alamat;
    public $lattitude;
    public $longitude;
    public $no_telp;
    public $website;
    public $gambar;
    public $jam_buka;
    public $jam_tutup;
    public function __construct(){
        $this->db = Koneksi::getInstance()->getConnection();
    }

    public function getData()
    {
        try {
            $result = $this->db->query("SELECT * FROM tabel_toko");
            return $result;
        } catch (PDOException $e) {
            echo "Error". $e->getMessage();
            return false;
        }
    }
    public function hapusData($id)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM tabel_toko WHERE id = :id");
            $stmt->bindParam(":id", $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function insertData()
    {
        try {
            $nama_toko = $this->sanitize_data($this->nama_toko);
            $deskripsi = $this->sanitize_data($this->deskripsi);
            $jenis = $this->sanitize_data($this->jenis);
            $rating = $this->sanitize_data($this->rating);
            $alamat = $this->sanitize_data($this->alamat);
            $lattitude = $this->sanitize_data($this->lattitude);
            $longitude = $this->sanitize_data($this->longitude);
            $no_telp = $this->sanitize_data($this->no_telp);
            $website = $this->sanitize_data($this->website);
            $gambar = $this->sanitize_data($this->gambar);
            $jam_buka = $this->sanitize_data($this->jam_buka);
            $jam_tutup = $this->sanitize_data($this->jam_tutup);

            $db_query = "INSERT INTO tabel_toko
                        (`nama_toko`, `deskripsi`, `jenis`, `rating`, `alamat`, `lattitude`, `longitude`, `no_telp`, `website`, `gambar`, `jam_buka`, `jam_tutup`)
                        VALUES (
                            :nama_toko, 
                            :deskripsi,
                            :jenis,
                            :rating,
                            :alamat,
                            :lattitude,
                            :longitude,
                            :no_telp,
                            :website,
                            :gambar,
                            :jam_buka,
                            :jam_tutup
                        )";

            $stmt = $this->db->prepare($db_query);

            $stmt->bindParam(':nama_toko', $nama_toko, PDO::PARAM_STR);
            $stmt->bindParam(':deskripsi', $deskripsi, PDO::PARAM_STR);
            $stmt->bindParam(':jenis', $jenis, PDO::PARAM_STR);
            $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
            $stmt->bindParam(':alamat', $alamat, PDO::PARAM_STR);
            $stmt->bindParam(':lattitude', $lattitude, PDO::PARAM_STR);
            $stmt->bindParam(':longitude', $longitude, PDO::PARAM_STR);
            $stmt->bindParam(':no_telp', $no_telp, PDO::PARAM_STR);
            $stmt->bindParam(':website', $website, PDO::PARAM_STR);
            $stmt->bindParam(':gambar', $gambar, PDO::PARAM_STR);
            $stmt->bindParam(':jam_buka', $jam_buka, PDO::PARAM_STR);
            $stmt->bindParam(':jam_tutup', $jam_tutup, PDO::PARAM_STR);

            $stmt->execute();

            $uploadDir = 'uploads/';
            $uploadedFile = $uploadDir . basename($_FILES['gambar']['name']);
            $imageFileType = strtolower(pathinfo($uploadedFile, PATHINFO_EXTENSION));

            // cek apakah beneran foto apa bukan
            $check = getimagesize($_FILES['gambar']['tmp_name']);
            if ($check === false) {
                echo "File bukan gambar.";
                return false;
            }

            // Check ukuran
            if ($_FILES['gambar']['size'] > 2 * 1024 * 1024) {
                echo "Ukuran file melebihi batas maksimum yang diperbolehkan (2MB).";
                return false;
            }

            // hanya izinkan jpg, jpeg dan png
            if ($imageFileType != 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'png') {
                echo "Hanya file JPG, JPEG, dan PNG yang diperbolehkan.";
                return false;
            }

            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadedFile)) {

                return true;
            } else {
                echo "Terjadi kesalahan saat mengunggah file.";
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function getDataId($id)
    {
        try {
            $db_query = "SELECT * FROM tabel_toko WHERE id = :id LIMIT 1";
            $stmt = $this->db->prepare($db_query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function updateData($id)
{
    try {
        $nama_toko = $this->sanitize_data($this->nama_toko);
        $deskripsi = $this->sanitize_data($this->deskripsi);
        $jenis = $this->sanitize_data($this->jenis);
        $rating = $this->sanitize_data($this->rating);
        $alamat = $this->sanitize_data($this->alamat);
        $lattitude = $this->sanitize_data($this->lattitude);
        $longitude = $this->sanitize_data($this->longitude);
        $no_telp = $this->sanitize_data($this->no_telp);
        $website = $this->sanitize_data($this->website);
        $jam_buka = $this->sanitize_data($this->jam_buka);
        $jam_tutup = $this->sanitize_data($this->jam_tutup);

        // cek apakah ada gambar baru
        if (!empty($_FILES['gambar']['name'])) {
            $oldData = $this->getDataId($id);
            $oldImage = $oldData['gambar'];
            if ($oldImage !== $_FILES['gambar']['name']) {
                // jika ada foto baru, hapus foto lama
                unlink('uploads/' . $oldImage);
            }

            // Upload gambar baru
            $uploadDir = 'uploads/';
            $uploadedFile = $uploadDir . basename($_FILES['gambar']['name']);
            move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadedFile);
            $gambar = $_FILES['gambar']['name'];
        } else {
            // kalau gaada gambar baru, tetep simpen gambar lama
            $oldData = $this->getDataId($id);
            $gambar = $oldData['gambar'];
        }

        $db_query = "UPDATE tabel_toko SET
                    `nama_toko` = :nama_toko,
                    `deskripsi` = :deskripsi,
                    `jenis` = :jenis,
                    `rating` = :rating,
                    `alamat` = :alamat,
                    `lattitude` = :lattitude,
                    `longitude` = :longitude,
                    `no_telp` = :no_telp,
                    `website` = :website,
                    `gambar` = :gambar,
                    `jam_buka` = :jam_buka,
                    `jam_tutup` = :jam_tutup
                    WHERE id = :id";

        $stmt = $this->db->prepare($db_query);

        $stmt->bindParam(':nama_toko', $nama_toko, PDO::PARAM_STR);
        $stmt->bindParam(':deskripsi', $deskripsi, PDO::PARAM_STR);
        $stmt->bindParam(':jenis', $jenis, PDO::PARAM_STR);
        $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindParam(':alamat', $alamat, PDO::PARAM_STR);
        $stmt->bindParam(':lattitude', $lattitude, PDO::PARAM_STR);
        $stmt->bindParam(':longitude', $longitude, PDO::PARAM_STR);
        $stmt->bindParam(':no_telp', $no_telp, PDO::PARAM_STR);
        $stmt->bindParam(':website', $website, PDO::PARAM_STR);
        $stmt->bindParam(':gambar', $gambar, PDO::PARAM_STR);
        $stmt->bindParam(':jam_buka', $jam_buka, PDO::PARAM_STR);
        $stmt->bindParam(':jam_tutup', $jam_tutup, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        return true;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

    

// Fungsi untuk membersihkan data input
private function sanitize_data($data)
{
    $trimmed_data = trim($data);
    $str_splash_data = stripslashes($trimmed_data);
    $html_chars_data = htmlspecialchars($str_splash_data);
    return $html_chars_data;
}

}
?>
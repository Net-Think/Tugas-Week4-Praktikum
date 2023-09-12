<?php
include 'Database.php';
class Toko
{
    private $db;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
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
}
?>
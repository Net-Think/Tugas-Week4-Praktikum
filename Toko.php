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
            $result = $this->db->query("DELETE FROM tabel_toko WHERE id ='$id'");
            return $result;
            header("Location: tables.php");
        } catch (PDOException $e) {
            echo "Error". $e->getMessage();
            return false;
        }
    }
}
?>
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


}

?>
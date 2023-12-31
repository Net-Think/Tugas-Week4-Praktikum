<?php
include 'KoneksiConfig.php';
class Koneksi{
    private static $instance = null;
    private $conn;
    private function __construct(){
        $config = new KoneksiConfig();
        $dbHost  = $config->getHost();
        $dbUsername =  $config->getUsername();
        $dbPassword =  $config->getPassword();
        $dbName = $config->getDatabaseName();
    

        try {
            $this->conn = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUsername,$dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Koneksi failed";
        }
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Koneksi();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }
}
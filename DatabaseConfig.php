<?php

class DatabaseConfig
{
    private  $dbHost  = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "talascare";


    public function getHost(){
        return $this->dbHost;
    }

    public function getUsername(){
        return $this->dbUsername;
    }

    public function getPassword(){
        return $this->dbPassword;
    }

    public function getDatabaseName(){
        return $this->dbName;
    }
}
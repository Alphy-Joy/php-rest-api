<?php

class Database{

    // variable declaration
    private $hostname;
    private $dbname;
    private $username;
    private $password;
    private $conn;

    public function connect(){

        // variable initialisation
        $this->hostname = "localhost";
        $this->dbname = "rest_php_api";
        $this->username = "root";
        $this->password = "";

        $this->conn = new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
        if($this->conn->connect_errno){
            print_r($this->conn->connect_error);
            exit;
        }else{
            return $this->conn;
            //echo "test";
           // print_r($this->conn);
        }
    }
}

$db = new Database();
$db->connect();

?>
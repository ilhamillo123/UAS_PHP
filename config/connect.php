<?php

class connect{
    private $conn;
 
    public function __construct(){
        $this->conn = new mysqli("localhost", "root", "", "apk_uas");
    }

    public function getConnection(){
        return $this->conn;
    }

    public function __destruct(){
        $this->conn->close();
    }

}
?>
<?php
require_once __DIR__ . "/../config/connect.php";
class user extends connect{
    protected $id_user;
    protected $nama;

    public function __construct($id_user, $nama){
        $this->id_user = $id_user;
        $this->nama = $nama;
    }

    public function getId(){
        return $this->id_user;
    }

    public function getNAMA(){
        return $this->nama;
    }
} 


?>
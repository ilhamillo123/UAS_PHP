<?php
require_once __DIR__ . "/../config/connect.php";
class pengeluaran   extends connect{
    

    private $ID;
    private $KETERANGAN;
    private $JUMLAH;

    public function getID(){
        return $this->ID;
    }
    public function getKETERANGAN(){
        return $this->KETERANGAN;
    }
    public function getJUMLAH(){
        return $this->JUMLAH;
    }
    public function setID($ID){
        $this->ID = $ID;
    }
    public function setKETERANGAN($KETERANGAN){
        $this->KETERANGAN = $KETERANGAN;
    }
    public function setJUMLAH($JUMLAH){
        $this->JUMLAH = $JUMLAH;
    }



    public function creat(){
        $sql = "INSERT INTO pengeluaran (ID,KETERANGAN, JUMLAH) VALUES (NULL,'".$this->getKETERANGAN()."','".$this->getJUMLAH()."')";
        $result = $this->getConnection()->query($sql);
        return $result ? true : false;
    }

    public function read(){
        $sql = "SELECT * FROM pengeluaran ORDER BY ID ASC";
        $result = $this->getconnection()->query($sql);
        $data = [];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    public function update(){
        $sql = "UPDATE pengeluaran set KETERANGAN='" . $this->getKETERANGAN() . "', JUMLAH='" . $this->getJUMLAH() . "' WHERE ID='" . $this->getID() . "'";
        $result = $this->getConnection()->query($sql);
        return $result ? true : false;
    }
    public function delete(){
        $sql = "DELETE FROM pengeluaran WHERE ID='" . $this->getID() . "'";
        $result = $this->getConnection()->query($sql);
        return $result ? true : false;
    }

}





<?php
require_once __DIR__ . "/../config/connect.php";
class bendahara extends connect{
    public $conn;
    
    public function creat($id, $nama){
        $sql = "INSERT INTO bendahara (ID_ANGGOTA, NAMA_BENDAHARA) VALUES ('$id', '$nama')";
        $result = $this->getConnection()->query($sql);
        while($row = $result->fetch_assoc()){
            $jumlah = $row['jumlah'];
            $row = $result->fetch_assoc();
        }
        return $row['total_bendahara'];
    }

    public function read(){
        $sql = "SELECT * FROM bendahara ORDER BY ID_ANGGOTA ASC";
        $result = $this->getConnection()->query($sql);
         return $result ? true : false;
     }
       

    public function update($id, $nama){
        $sql = "UPDATE bendahara set NAMA_BENDAHARA='$nama' WHERE ID_ANGGOTA='$id'";
        $result = $this->getConnection()->query($sql);

        return $result ? true : false;
    }

    public function delete($id){
        $sql = "DELETE FROM bendahara WHERE ID_ANGGOTA='$id'";
        $result = $this->getConnection()->query($sql);

        return $result ? true : false;
    }
}



?>
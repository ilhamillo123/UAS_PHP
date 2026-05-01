<?php
require_once __DIR__ . "/../config/connect.php";
class anggota extends connect{
    public $conn;

   
    public function create($id, $nama){
        $sql = "INSERT INTO anggota (id_anggota, nama) VALUES ('$id', '$nama')";
        $result = $this->getConnection()->query($sql);
        return $result;
    }

    public function read(){
        $sql = "SELECT * FROM anggota ORDER BY id_anggota ASC";
        $result = $this->getConnection()->query($sql);
        $data = [];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    public function update($id, $nama){
        $sql = "UPDATE ANGGOTA set nama='$nama' WHERE id_anggota='$id'";
        $result = $this->getConnection()->query($sql);

        return $result ? true : false;
    }

    public function delete($id){
        $sql = "DELETE FROM anggota WHERE id_anggota='$id'";
        $result = $this->getConnection()->query($sql);

        return $result ? true : false;
    }
}





?>
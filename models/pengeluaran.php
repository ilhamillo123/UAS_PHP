<?php
require_once __DIR__ . "/../config/connect.php";
class pengeluaran   extends connect{
    protected $conn;

    public function creat($ID,$KETERANGAN, $JUMLAH){
        $sql = "INSERT INTO pengeluaran (ID,KETERANGAN, JUMLAH) VALUES (NULL,'$KETERANGAN', '$JUMLAH')";
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

    public function update($ID, $KETERANGAN, $JUMLAH){
        $sql = "UPDATE pengeluaran set KETERANGAN='$KETERANGAN', JUMLAH='$JUMLAH' WHERE ID='$ID'";
        $result = $this->getConnection()->query($sql);
        return $result ? true : false;
    }
    public function delete($ID){
        $sql = "DELETE FROM pengeluaran WHERE ID='$ID'";
        $result = $this->getConnection()->query($sql);
         return $result ? true : false;

    }

}

?>
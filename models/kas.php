<?php
require_once __DIR__ . "/../config/connect.php";
require_once "Pemasukan.php";
require_once "Pengeluaran.php";

class kas extends connect{
    public $conn;

 
    function JUMLAH_pemasukan(){
        $sql = "SELECT SUM(JUMLAH) AS total_pemasukan FROM pemasukan";
        $result01 = $this->getConnection()->query($sql);
        if ($result01 && $row = $result01->fetch_assoc()) {
            return $row['total_pemasukan'] ?? 0;
        }
        return 0;
    }

     function JUMLAH_pengeluaran(){
        $sql = "SELECT SUM(JUMLAH) AS total_pengeluaran FROM pengeluaran";
        $result02 = $this->getConnection()->query($sql);
        if ($result02 && $row = $result02->fetch_assoc()) {
            return $row['total_pengeluaran'] ?? 0;
        }
        return 0;
    }
        

    

        function total_kas(){
            $total_kas = $this->JUMLAH_pemasukan() - $this->JUMLAH_pengeluaran();
            return $total_kas;
        }

}

?>      

























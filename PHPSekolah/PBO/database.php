<?php 

class Database{
    public $db="dbtoko";
    private $host="localhost";
    private $user="root";
    private $password="";
    public function insertData(){
        return "INSERT DATA";
    }
    public static function selectData(){
        return "SELECT DATA";
    }
    public function deleteData(){
        return "DELETE DATA";
    }
    public function updateData(){
        return "UPDATE DATA";
    }
    public function ambil(){
        return $this->host;
    }
}

class Penjualan{
    public function barang(){
        return "barang";
    } 
    public static function pelanggan(){
        return "pelanggan";
    }
} 

$usedb=new Database;
echo $usedb->insertData();
echo "<br>";
echo $usedb->db;
echo "<br>";
echo $usedb->ambil();
echo "<br>";
echo $usedb->selectData();
echo "<br>";
echo Database::selectData();
echo "<br>";

$usepenjualan=new Penjualan;
echo $usepenjualan->barang();
echo "<br>";
echo Penjualan::pelanggan();


?>
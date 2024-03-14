<?php

require_once '../function.php';

if(isset($_GET["hapus"])){

$id=$_GET["hapus"];

$sql= "DELETE FROM tblkategori WHERE idkategori = ".$id;
$hasil= mysqli_query($connect,$sql);

// echo $hasil;
echo "<h1>".$id."</h1>";
}
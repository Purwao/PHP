<form action="" method="post">
    <h3>What's the category compadre?</h3>
    <input type="text" name="kategori">
    <br>
    <input type="submit" value="simpan" name="simpan">
</form>

<?php

require_once "../function.php";

if(isset($_POST["simpan"])){

$kategori=$_POST["kategori"] ?? null;

$sql="INSERT INTO tblkategori(kategori) VALUES('$kategori')";
$hasil=mysqli_query($connect,$sql);
 

header("location: https://localhost/PHP%20Folder/PHPRevit/Resto/kategori/select.php");
}
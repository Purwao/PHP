<?php

require_once("../function.php");
require_once("select.php");

if(isset($_GET["update"])){
    $id=$_GET["update"];
    $sql="SELECT * FROM tblkategori WHERE idkategori=$id";
    $hasil=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($hasil)  ;
    $ktgr=$row[1] ?? null;
}
else{
    $ktgr="data kosong, klik update";
}


?>

<br><br>
<form action="" method="post">
    <input type="text" name="kategori" value="<?php echo $ktgr ?>" >
    <input type="submit" name="simpan" value="simpan" >
</form>


<?php 
if(isset($_POST["simpan"])){
    $kategori=$_POST["kategori"];

    $sql="UPDATE tblkategori SET kategori='$kategori'WHERE idkategori=$update";
    $hasil= mysqli_query($connect, $sql);
    header("location:https://localhost/PHP%20Folder/PHPRevit/Resto/kategori/update.php");
}
?>
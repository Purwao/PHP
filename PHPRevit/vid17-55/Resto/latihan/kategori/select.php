<a href="insert.php"><h1>INSERT DATA</h1></a>
<br><br>



<?php

require_once "../function.php";
require_once "delete.php";



$sql="SELECT idkategori FROM tblkategori";
$hasil=mysqli_query($connect, $sql);
$jumlahdata=mysqli_num_rows($hasil);

$mulai=0;
$banyak=2;

$halaman= ceil($jumlahdata/$banyak);

for ($i=1; $i<=$halaman ; $i++) { 
    echo "<a href=?page=".$i.">".$i."</a>";
    echo "&nbsp &nbsp &nbsp";
}

if(isset($_GET["page"])){
    $p=$_GET["page"];
    $mulai= ($p * $banyak) - $banyak ;
}
else{
    $mulai=0;
}

$sql="SELECT * FROM tblkategori LIMIT $mulai,$banyak";
$hasil=mysqli_query($connect,$sql);

$jumlah=mysqli_num_rows($hasil);


if($jumlah>0){
    echo "<table border='1px'>
    <tr>
        <th>
            ID
        </th>
        <th>
            KATEGORI
        </th>
        <th>
            HAPUS
        </th>
        <th>
            UPDATE
        </th>
    </tr>
    
";
    while($row= mysqli_fetch_array($hasil)){
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td><a href=?hapus=".$row[0].">"."Delete"."</a></td>";
        echo "<td><a href=?update=".$row[0].">"."Update"."</a></td>";
        echo "</tr>";


    }
}


echo "</table>";
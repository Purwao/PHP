<form action="" method="post">
    barang:
    <input type="text" name="namabarang" placeholder="nama barang" >
    <br>
    harga:
    <input type="number" name="harga" placeholder="harga barang">
    <br>
    stok:
    <input type="number" name="stok" placeholder="stok barang">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php 
 $host="127.0.0.1";
 $user="root";
 $password="";
 $db="dbtoko";
 
 $koneksi=new mysqli($host, $user, $password, $db);

if(isset($_POST["simpan"])){
    $namabarang=$_POST["namabarang"];
    $harga=$_POST["harga"];
    $stock=$_POST["stok"];
$sql="INSERT INTO barang (namabarang,harga,stock) VALUES ('$namabarang',$harga,$stock)";
$hasil=mysqli_query($koneksi, $sql);
}

$sql="SELECT * FROM barang";
$hasil=mysqli_query($koneksi, $sql);

var_dump($hasil);

echo "<table border=2px>
        <thead>
            <tr>
                <th>
                    BARANG
                </th>
                <th>
                    HARGA
                </th>
                <th>
                    STOCK
                </th>
            </tr>
        </thead>
        <tbody>";

while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
        echo "<td> " . $row[1] . "</td>";
        echo "<td> " . $row[2] . "</td>";
        echo "<td> " . $row[3] . "</td>";
    echo "</tr>";
}

echo "  </tbody>
    </table>";

// //pelanggan

// $pelanggan="gina";
// $alamat="isekai";
// $nmrtelepon=231;

// $sql="INSERT INTO pelanggan(namapelanggan,alamat,telepon) VALUES ('$pelanggan','$alamat',$nmrtelepon)";
// $hasil=mysqli_query($koneksi, $sql);

// $sql="SELECT * FROM pelanggan";
// $hasil=mysqli_query($koneksi,$sql);

// echo "<table border=2px>
// <thead>
// <tr>
//     <th>
//         PELANGGAN
//     </th>
//     <th>
//         ALAMAT
//     </th>
//     <th>
//         TELEPON
//     </th>
// </tr>
// </thead>
// <tbody>";

// while($row=mysqli_fetch_array($hasil)){
//     echo "<tr>";
//         echo "<td>". $row[1]. "</td>";
//         echo "<td>". $row[2]. "</td>";
//         echo "<td>". $row[3]. "</td>";
//     echo "</tr>";
// }

// echo "</tbody></table> "
?>
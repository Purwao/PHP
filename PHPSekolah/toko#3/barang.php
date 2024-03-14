<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
</head>
<body>
    <h1>Barang yang ada di toko:</h1>
    <div id="formbarang">
        <div>
        <form action="" method="post">
        <h3>Barang:</h3>
        <input type="text" name="namabarang" placeholder="nama barang" >
        <br>
        <h3>Harga:</h3>
        <input type="number" name="harga" placeholder="harga barang">
        <br>
        <h3>Stok:</h3>
        <input type="number" name="stok" placeholder="stok barang">
        <br>
        <input type="submit" name="simpan" id="btn" value="simpan">
        </div>
        
</form>
</body>
<style>
    h1{
       padding: 5vh;
        text-align: center;
    }
    form{
        text-align: center;
    }
    input{
        border: solid black 1px;
        width: 35vw;
    }
    body{
        color: white;
        font-family: cursive;
        background-color:darkslategray;
    }
    #formbarang{
        height: 60vh;
        width: 100vw;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
         align-items: center;
    
    }
    #tabel{
        border: 2px solid white;
        border-radius: 30px;
        padding: 10px;
    }
</style>
</html>
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

// var_dump($hasil);

echo "<div><table id='tabel' >
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
    </table>
    </div>
    </div>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Customer</title>
</head>
<body>
    <div>
        <h1>List Customer</h1>    
    <form action="" method="post">
        <input type="text" name="pelanggan" placeholder="Nama Pelanggan">
        <input type="text" name="alamat" placeholder="alamat pelanggan">
        <input type="number" name="telepon" placeholder="telepon pelanggan">
        <input type="submit" name="simpan" value="simpan">
    </form>
    </div>
    <br><br>
</body>
<style>
    body{
        color: darkslategrey;
        background-color: wheat;
        font-family: cursive;
    }
    h1{
        text-align: center;
        text-decoration: wavy;
    }
    form{
        text-align: center;
    }
    #tabel{
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        padding: 10px;
        border: 2px solid darkslategrey;
        border-radius: 30px;
       ;
    }
</style>
    <?php 
    $host="127.0.0.1";
    $user="root";
    $password="";
    $db="dbtoko";

    $koneksi= new mysqli($host, $user, $password,$db);

    
    $pelanggan=$_POST["pelanggan"] ?? null;
    $alamat=$_POST["alamat"] ?? null ;
    $telepon=$_POST["telepon"] ?? null  ;


    $sql="INSERT INTO pelanggan(namapelanggan, alamat, telepon) VALUES('$pelanggan', '$alamat',$telepon)";
    $hasil=mysqli_query($koneksi,$sql);


    $sql="SELECT * FROM pelanggan";
    $hasil=mysqli_query($koneksi, $sql);

    echo "  <table id='tabel'>
    <thead>
        <tr>
            <th>
                Nama Pelanggan
            </th>
            <th>
                Alamat
            </th>
            <th>
                Nomor Telepon
            </th>
        </tr>
    </thead>
    <tbody>
        ";

        while($row= mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>" . $row[1] . "</td>" ;
            echo "<td>". $row[2]. "</td>" ;
            echo "<td>". $row[3]. "</td>";
            echo "</tr>";
        }

        echo"
        </tr>
    </tbody>
</table>";
    
    ?>
</html>
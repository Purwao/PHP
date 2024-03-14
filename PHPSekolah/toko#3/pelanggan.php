<?php
    $host="127.0.0.1";
    $user="root";
    $password="";
    $db="dbtoko";
    $koneksi= new mysqli($host, $user, $password,$db);


    $id=0;
    $namapelanggan="";
    $alamat="";
    $telepon=0;

    if(isset($_GET["ubah"])){
        $id=$_GET["ubah"];
        $sql="SELECT * FROM pelanggan WHERE id=".$id ;
        $hasil=mysqli_query($koneksi, $sql);

        if(mysqli_num_rows($hasil)>0){
            $row=mysqli_fetch_array($hasil);
            $id=$row[0];
            $namapelanggan=$row[1];
            $alamat=$row[2];
            $telepon=$row[3];
        }
       
    }
?>
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
        <input type="text" name="pelanggan" placeholder="Nama Pelanggan" value="<?php echo $namapelanggan?>">
        <input type="text" name="alamat" placeholder="alamat pelanggan" value="<?php echo $alamat?>">
        <input type="number" name="telepon" placeholder="telepon pelanggan" value="<?php echo $telepon?>">
        <input type="submit" name="simpan" value="simpan">
        <input type="hidden" name="id" value="<?php echo $id ?>">
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
        $pelanggan=$_POST["pelanggan"] ?? null;
        $alamat=$_POST["alamat"] ?? null ;
        $telepon=$_POST["telepon"] ?? null  ;

        
        if(isset($_POST["id"])){
            $id=$_POST["id"];
            if($id==0){
                $sql="INSERT INTO pelanggan(namapelanggan, alamat, telepon) VALUES('$pelanggan', '$alamat',$telepon)";
                $hasil=mysqli_query($koneksi,$sql);
            } 
            else{
                $sql="UPDATE pelanggan SET namapelanggan='$pelanggan',alamat='$alamat',telepon=$telepon WHERE id=".$id;
                $hasil=mysqli_query($koneksi, $sql);
                header("location:https://localhost/toko/pelanggan.php");
            }
        }
    
    

    if(isset($_GET["hapus"])){
        $id=$_GET["hapus"];
        $sql="DELETE FROM pelanggan WHERE id=".$id;
        $hasil=mysqli_query($koneksi, $sql);
    }

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
            <th>
                Hapus
            </th> 
            <th>
                Ubah
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
            echo "<td>". "<a href='?hapus=".$row[0]."'>hapus</a>"."</td>";
            echo "<td>". "<a href='?ubah=". $row[0]."'>ubah</a>"."</td>";
            echo "</tr>";
        }

        echo"
        </tr>
    </tbody>
</table>";
    
    ?>
</html>
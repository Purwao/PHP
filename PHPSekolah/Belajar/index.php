<h1>Belajar PHP</h1>
<form action="" method="get">
nama:
<input type="text" name="nama" placeholder="masukkan nama">
<input type="submit" name="tombol" value="kirim" >
</form>
<a href="?coba=rpl">klik</a>
<?php 

if(isset($_GET["nama"])){
    $isi=$_GET["nama"];
    echo '<h2>'.$isi.'</h2>';
}

// var_dump($isi);

echo "luas persegi=".persegi(10)."<br>";
echo "kuas bunder=".bunder(10)."<br>";
echo "luas segitiga=".segitiga(10,10)."<br>";
echo "luas tabung=".tabung(10,10)."<br>";
function persegi($s){
    $sisi=$s*$s;
    return $sisi;
}

function bunder($r){
    $luas=3.14*$r*$r;
    return $luas;
}
function segitiga($alas,$tinggi){
    $luassegitiga=0.5*$alas*$tinggi;
    return $luassegitiga;
}
function tabung($r,$t){
    $luastabung= 3.14*$r*$r*$t;
    return $luastabung;
}
?>
<p>belajar PHP</p>
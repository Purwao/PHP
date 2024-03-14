<form action="" method="get">
<h1>nama</h1>
<input type="text" name="nama">
<h1>password</h1>
<input type="password" name="pw">
<input type="submit" name="simpan" value="simpan">
</form>

<?php

    if (isset($_GET['simpan'])){
        $nama = $_GET['nama'];
        $password = $_GET['pw'];

        echo $nama;
        echo '<br>';
        echo $password;
    }

?>
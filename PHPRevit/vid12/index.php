<form action="" method="post">
    <h1>username</h1>
    <input type="text" name="nama">
    <h1>password</h1>
    <input type="password" name="password">
    <input type="submit" name="kirim" value="login">
</form>

<?php 
    
    if (isset($_POST['kirim'])) {
        $email = $_POST['nama'];
        $password = $_POST['password'];
    
        echo $email;
        echo '<br>';
        echo $password;
    }
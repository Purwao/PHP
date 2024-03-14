<?php
    session_start();

    $_SESSION['user']= 'joni';
    
    $_SESSION['nama']= 'joni rambo';

    $_SESSION['alamat']= 'Sidoarjo';


    echo $_SESSION['user'];
    echo '<br>';

    echo $_SESSION['nama'];
    echo '<br>';

    echo $_SESSION['alamat'];
    echo '<br>';

    foreach ($_SESSION as $key => $value) {
        echo $key.'=>'.$value.'<br>';
    }


   
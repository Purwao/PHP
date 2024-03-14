<?php 

    $nama = array(
        "Tejo" => "Surabaya",
        "Budi" => "Malang",
        "Siti" => "Sidoarjo"
    );

    var_dump($nama);
    echo '<br>';

    foreach ($nama as $a => $b) {
        echo $a . ' - ' . $b;
        echo '<br>';
    }
    
?>
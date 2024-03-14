<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiak</title>
    <style>
        h2{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 600;
            border: none;
            background-color: white;
            padding: 2vh;
            border-radius: 40px;
            text-align: center;
        }
        body{
            background-color: slateblue;
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        #form-container{
            background-color: slategray;
            padding: 4vh;
            border-radius: 30px;
        }
        #background{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
        }
        #form{
            color:white;
            text-align: center;
        }
        #submit{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 600;
            border: none;
            background-color: white;
            padding: 2vh;
            border-radius: 40px;
        }
        
       

    </style>
</head>
<body>
<div id="background">
        <div id="form-container">
        <h2>Cek Zodiak Anda</h2>
            <div id="form">
                <form action="" method="get">
                <p>Tanggal Lahir:</p>
                    <input type="number" name="tanggal" id="tanggal" >
                <p>Bulan Lahir:</p>
                    <input type="number" name="bulan" id="bulan">
                    <br>
                    <br>
                    <input type="submit" value="AYO CEK!" id="submit">
                </form>
            </div>
        </div>
    </div>
    <?php
        
       
        $zodiakfinal="";
        $tanggal=$_GET["tanggal"] ?? null;
        $bulan=$_GET["bulan"] ?? null;
        
        if(isset($bulan,$tanggal)){

            if (($bulan >= 1 && $bulan <= 12) && ($tanggal >= 1 && $tanggal <= 31)) {
                $zodiakfinal=tentukanZodiak($tanggal,$bulan);
            } 
            else{
              echo "<h2>Data Invalid</h2>";
            }
        

        if($zodiakfinal){
            echo "<h2>Zodiak Anda adalah: ".$zodiakfinal.".</h2>";
        }

        }
    

    function tentukanZodiak($tanggal, $bulan) {
        $zodiak = '';

        if (($bulan == 3 && $tanggal >= 21) || ($bulan == 4 && $tanggal <= 19)) {
            $zodiak = 'Aries';
        } elseif (($bulan == 4 && $tanggal >= 20) || ($bulan == 5 && $tanggal <= 20)) {
            $zodiak = 'Taurus';
        } elseif (($bulan == 5 && $tanggal >= 21) || ($bulan == 6 && $tanggal <= 20)) {
            $zodiak = 'Gemini';
        } elseif (($bulan == 6 && $tanggal >= 21) || ($bulan == 7 && $tanggal <= 22)) {
            $zodiak = 'Cancer';
        } elseif (($bulan == 7 && $tanggal >= 23) || ($bulan == 8 && $tanggal <= 22)) {
            $zodiak = 'Leo';
        } elseif (($bulan == 8 && $tanggal >= 23) || ($bulan == 9 && $tanggal <= 22)) {
            $zodiak = 'Virgo';
        } elseif (($bulan == 9 && $tanggal >= 23) || ($bulan == 10 && $tanggal <= 22)) {
            $zodiak = 'Libra';
        } elseif (($bulan == 10 && $tanggal >= 23) || ($bulan == 11 && $tanggal <= 21)) {
            $zodiak = 'Scorpio';
        } elseif (($bulan == 11 && $tanggal >= 22) || ($bulan == 12 && $tanggal <= 21)) {
            $zodiak = 'Sagittarius';
        } elseif (($bulan == 12 && $tanggal >= 22) || ($bulan == 1 && $tanggal <= 19)) {
            $zodiak = 'Capricorn';
        } elseif (($bulan == 1 && $tanggal >= 20) || ($bulan == 2 && $tanggal <= 18)) {
            $zodiak = 'Aquarius';
        } elseif (($bulan == 2 && $tanggal >= 19) || ($bulan == 3 && $tanggal <= 20)) {
            $zodiak = 'Pisces';
        }

        return $zodiak;
    }
    
  
   
?>

</body>
</html>



<!-- 19.30:MULAI? -->
<!-- 19.40:WAYAHE MAEM ESKRIM GES -->
<!-- 20.00:LANJUT -->
<!-- 20.20:saya masih disini, walau ngeblank -->
<!-- ~20.30:WKWKWK, SELESAI -->
<!-- terimakasih. -->
<!-- written by: Poerwa/29 -->


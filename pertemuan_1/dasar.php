<?php
    // echo "Hello world";
    // $contoh_int = 1;
    // $contoh_str = "Shyfa";
    // $contoh_double = 1.1;
    // $contoh_arr = [];
    // $str_satu = "Pemrograman";
    // $str_dua = "PRPL";
    // echo $str_satu . $str_dua;

    $array = ['Pemrograman', 'Website', 'B'];
    // var_dump($array)
    foreach ($array as $value){
        echo $value . " ";
    }
    echo "<br>";
    for ($i=0; $i < count($array); $i++) { 
        echo $array[$i] . "<br>";
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar PHP</title>
</head>
<body>
    <?php 
    for ($i = 0; $i < 5; $i++): ?>{
        if($i % 2 == 0) { ?>
            <p>genap</p>
        <?php } else { ?>
            <p>ganjil</p>
        <?php }
    } ?>
</body>
</html>
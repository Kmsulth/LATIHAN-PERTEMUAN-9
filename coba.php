<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Belajr PHP</title>
    <link rel="stylesheet" href="">
</head>
<body>


    <?php
    $angka = 10 ;
    $angka2 = 2;

    echo "Operator Aritmatika ".$angka." $ ".$angka2;
    echo "<br> penjumlahan : ".$angka + $angka2;
    echo "<br> pengurangan : ".$angka - $angka2;
    echo "<br> perkalian : ".$angka * $angka2;
    echo "<br> pembagian : ".$angka / $angka2;
    echo "<br> perpangkatan : ".$angka ** $angka2;
    echo "<br> module : ".$angka % $angka2;

    $kata = "bismilah";
    $kata.= "Bisa PHP";

    echo $kata;
    ?>

</body>
</html>
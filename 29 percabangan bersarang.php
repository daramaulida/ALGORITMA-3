<?php

$umur = 17;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "Selamat datang pak!";
    } else {
        echo "Selamat datang wahai pemuda!";
    }
} else {
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
    echo "<hr>";
}

$umur = 19;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "Selamat datang pak!";
    } else {
        echo "Selamat datang wahai pemuda!";
        echo "<hr>";
    }
} else {
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
    echo "<hr>";
}

$umur = 19;
$menikah = true;

if($umur > 18){
    if($menikah){
        echo "Selamat datang pak!";
        echo "<hr>";
    } else {
        echo "Selamat datang wahai pemuda!";
        echo "<hr>";
    }
} else {
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
    echo "<hr>";
}
echo "<p><strong>By:Dara Maulida";
?>

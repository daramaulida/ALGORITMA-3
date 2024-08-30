<?php

$nilai = 100;

if ($nilai > 90) {
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "A";
} elseif($nilai > 70){
    $grade = "B+";
} elseif($nilai > 60){
    $grade = "B";
} elseif($nilai > 50){
    $grade = "C+";
} elseif($nilai > 40){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade <br>";
echo "<hr>";

$Nilai = 45;

if ($Nilai > 90) {
    $Grade = "A+";
} elseif($Nilai > 80){
    $Grade = "A";
} elseif($Nilai > 70){
    $Grade = "B+";
} elseif($Nilai > 60){
    $Grade = "B";
} elseif($Nilai > 50){
    $Grade = "C+";
} elseif($Nilai > 40){
    $Grade = "C";
} elseif($Nilai > 30){
    $Grade = "D";
} elseif($Nilai > 20){
    $Grade = "E";
} else {
    $Grade = "F";
}

echo "Nilai anda: $Nilai<br>";
echo "Grade: $Grade";
echo "<hr>";
echo "<p><strong>By:Dara Maulida";

?>

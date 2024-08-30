<?php

//Pernyataan If
$nilai = 75;
if ($nilai > 70) {
  echo "Selamat, kamu lulus!";
  echo "<hr>";
}

//Pernyataan Else
$nilai = 60;
if ($nilai > 70) {
  echo "Selamat, kamu lulus!";
} else {
  echo "Maaf, kamu harus mengulang.";
  echo "<hr>";
}

//Pernyataan Elseif
$nilai = 80;
if ($nilai >= 90) {
  echo "Nilai kamu A";
} elseif ($nilai >= 80) {
  echo "Nilai kamu B";
  echo "<hr>";
} else {
  echo "Nilai kamu C";
}

//Pernyataan Switch
$grade = 'B';
switch ($grade) {
  case 'A':
    echo "Luar biasa!";
    break;
  case 'B':
  case 'C':
    echo "Bagus!";
    echo "<hr>";
    break;
  default:
    echo "Tetap semangat!";
}
echo "<p><strong>By:Dara Maulida";
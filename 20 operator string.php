<?php

//strlen
//Digunakan untuk mendapatkan panjang sebuah string.

$text = "Hello World!";
echo strlen($text); // Outputs: 12
echo "<hr>";

//str_word_count
//Menghitung jumlah kata dalam string.
$text = "Hello World!";
echo str_word_count($text); // Outputs: 2
echo "<hr>";

//strrev
//Memutar balik urutan karakter dalam string.
$text = "Hello World!";
echo strrev($text); // Outputs: "!dlroW olleH"
echo "<hr>";

//strtoupper dan strtolower
//Mengubah semua karakter dalam string menjadi huruf besar (strtoupper) atau huruf kecil (strtolower).
echo strtoupper("Hello World!"); // Outputs: "HELLO WORLD!"
echo strtolower("Hello World!"); // Outputs: "hello world!"
echo "<hr>";

//ucwords dan lcfirst
//ucwords mengkapitalkan huruf pertama dari setiap kata dalam string, sedangkan lcfirst mengubah huruf pertama dari string menjadi huruf kecil.
echo ucwords("hello world!"); // Outputs: "Hello World!"
echo lcfirst("Hello"); // Outputs: "hello"
echo "<hr>";

//trim, ltrim, dan rtrim
//Menghilangkan whitespace (atau karakter lain) dari awal dan/atau akhir string. trim menghilangkan dari kedua sisi, ltrim hanya dari sisi kiri, dan rtrim hanya dari sisi kanan.
$text = " Hello World! ";
echo "[" . trim($text) . "]"; // Outputs: "[Hello World!]"
echo "[" . ltrim($text) . "]"; // Outputs: "[Hello World! ]"
echo "[" . rtrim($text) . "]"; // Outputs: "[ Hello World!]"
echo "<hr>";

//strpos dan strrpos
//Menemukan posisi pertama (strpos) atau terakhir (strrpos) dari suatu substring dalam string.
$text = "Hello World!";
echo strpos($text, "World"); // Outputs: 6
echo strrpos($text, "o"); // Outputs: 7
echo "<hr>";

//str_replace
//Menggantikan semua kemunculan substring dalam string dengan string lain.

$text = "Hello World!";
echo str_replace("World", "PHP", $text); // Outputs: "Hello PHP!"
echo "<hr>";

//substr
//Mengembalikan sebagian string berdasarkan posisi awal dan panjang yang ditentukan.

$text = "Hello World!";
echo substr($text, 0, 5); // Outputs: "Hello"
echo substr($text, 6); // Outputs: "World!"
echo "<hr>";

//strcmp dan strcasecmp
//Melakukan perbandingan dua string dengan case-sensitive (strcmp) atau case-insensitive (strcasecmp).

echo strcmp("Hello World!", "Hello World!"); // Outputs: 0
echo strcasecmp("hello world!", "HELLO WORLD!"); // Outputs: 0
echo "<hr>";

//str_split
//Mengkonversi string menjadi array.

$text = "Hello";
print_r(str_split($text, 2)); // Outputs: Array ( [0] => He [1] => ll [2] => o )
echo "<hr>";
echo "<p><strong>By:Dara Maulida";
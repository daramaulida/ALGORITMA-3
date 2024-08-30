<?php

//Boolean dalam Pengambilan Keputusan
$login_sukses = true;
$loginsukses = true;
if ($login_sukses) {
    echo "Selamat datang pengguna!";
    echo "<br>";
} if($loginsukses) {
    echo "Login gagal, silakan coba lagi.";
    echo "<hr>";
}

//Konversi ke Boolean
$nilai = 1;
$_nilai =10;
if ($nilai) {
    echo "Variabel ini bernilai true";
    echo "<br>";
} if($_nilai) {
    echo "Variabel ini bernilai false";
    echo "<hr>";
}
// Keluaran akan "Variabel ini bernilai false" karena nilai 0 dianggap false.

//Boolean dan Fungsi
$isiFile = "Contoh teks di dalam file.";
$status = file_put_contents("example.txt", $isiFile);
$_isiFile = "Contoh teks diluar dalam file.";
$_status = file_put_contents("example.txt", $_isiFile);
if ($status !== false) {
    echo "Penulisan file berhasil!";
    echo "<br>";
} if($_status !== true){
    echo "Penulisan file gagal.";
    echo "<hr>";
}
echo "<p><strong>By:Dara Maulida";
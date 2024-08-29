<?php

//Penggunaan Dasar fungsi die
if (file_exists('file_important.txt')) {
    echo "File ditemukan.";
} else {
    die("Error: File tidak ditemukan.");
    
}

 
<?php

//round()
//Fungsi round() digunakan untuk membulatkan angka ke bilangan bulat terdekat atau ke presisi desimal tertentu.
echo round(3.4); // Hasil: 3
echo round(3.5); // Hasil: 4
echo round(3.6); // Hasil: 4
echo round(3.678, 2); // Hasil: 3.68
echo "<hr>";

//ceil()
//Fungsi ceil() membulatkan angka ke atas ke bilangan bulat terdekat.
echo ceil(3.3); // Hasil: 4
echo ceil(3.9); // Hasil: 4
echo "<hr>";

//floor()
//Fungsi floor() membulatkan angka ke bawah ke bilangan bulat terdekat.
echo floor(3.3); // Hasil: 3
echo floor(3.9); // Hasil: 3
echo "<hr>";

//Format Angka
//Untuk menampilkan angka dengan format tertentu, PHP memiliki fungsi number_format().

//number_format()
//Fungsi ini memformat angka dengan memisahkan ribuan dan menentukan jumlah desimal.
echo number_format(1000); // Hasil: 1,000
echo number_format(1000.75, 2, '.', ','); // Hasil: 1,000.75
echo "<hr>";
echo "<p><strong>By:Dara Maulida";
<?php

echo 'Ini akan tampil di browser.';
echo '<p>Proses telah selesai';
echo '<p><strong>By:Dara Maulida';
exit;
echo 'Ini tidak akan tampil di browser.';


exit('Proses telah selesai.');

// Jika terjadi error
exit(1);

// Jika tidak ada error
exit(0);

<?php

class Baju {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$apel = new Baju("Blouse", "Putih");
print_r($apel);

echo "<br><br><strong>By:Dara Maulida";
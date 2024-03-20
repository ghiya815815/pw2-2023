<?php

require_once 'class_kasus.php';

// Membuat objek buku
$buku1 = new Buku("Petualangan di Pulau Misteri", "Dr. Amanda Hartono", 2022 ,150000);
$buku2 = new Buku("Rahasia Kode Enigma", "Prof. David Wijaya" , 2019 , 180000 );

// Menampilkan informasi buku
echo "Informasi Buku 1:<br>";
$buku1->getInfoBuku();
echo "<hr>"."<br>";

echo "Informasi Buku 2:<br>";
$buku2->getInfoBuku();

?>

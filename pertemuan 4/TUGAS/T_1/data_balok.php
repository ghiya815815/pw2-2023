<?php
/**
 * Task 2
 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
 * Luas, Keliling dan Volume
 * p = 29, l = 16, t = 7
 */

require_once "class_balok.php";

// Membuat objek (balok 1)
$balok1 = new Balok(29, 16, 7);
echo "Balok 1:";
echo "<br>";
echo "Luas: " . $balok1->getLuas();
echo "<br>";
echo "Keliling: " . $balok1->getKeliling();
echo "<br>";
echo "Volume: " . $balok1->getVolume();
echo "<br><br>";

// Membuat objek (balok 2)
$balok2 = new Balok(10, 5, 3);
echo "Balok 2:";
echo "<br>";
echo "Luas: " . $balok2->getLuas();
echo "<br>";
echo "Keliling: " . $balok2->getKeliling();
echo "<br>";
echo "Volume: " . $balok2->getVolume();
echo "<br><br>";

// Membuat objek (balok 3)
$balok3 = new Balok(15, 8, 4);
echo "Balok 3:";
echo "<br>";
echo "Luas: " . $balok3->getLuas();
echo "<br>";
echo "Keliling: " . $balok3->getKeliling();
echo "<br>";
echo "Volume: " . $balok3->getVolume();
echo "<br><br>";

// Membuat objek (balok 4)
$balok4 = new Balok(20, 12, 6);
echo "Balok 4:";
echo "<br>";
echo "Luas: " . $balok4->getLuas();
echo "<br>";
echo "Keliling: " . $balok4->getKeliling();
echo "<br>";
echo "Volume: " . $balok4->getVolume();
echo "<br><br>";
?>

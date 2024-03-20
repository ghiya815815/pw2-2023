<?php
/**
 * Task 2
 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
 * Luas, Keliling dan Volume
 * p = 29, l = 16, t = 7
 */

require_once "class_balok.php";
$balok1 = new Balok(29, 16, 7);
$balok2 = new Balok(10, 5, 3);
$balok3 = new Balok(15, 8, 4);
$balok4 = new Balok(20, 12, 6);

// Membuat objek (balok 1)
echo "Balok 1:";
echo "<br>";
echo "Luas: " . $balok1->getLuas() . " cm^2 ";
echo "<br>";
echo "Keliling: " . $balok1->getKeliling() . " cm ";
echo "<br>";
echo "Volume: " . $balok1->getVolume() . " cm^3 ";
echo "<br><br>";

// Membuat objek (balok 2)
echo "Balok 2:";
echo "<br>";
echo "Luas: " . $balok2->getLuas() . " cm^2 ";
echo "<br>";
echo "Keliling: " . $balok2->getKeliling() . " cm ";
echo "<br>";
echo "Volume: " . $balok2->getVolume() . " cm^3 ";
echo "<br><br>";

// Membuat objek (balok 3)
echo "Balok 3:";
echo "<br>";
echo "Luas: " . $balok3->getLuas() . " cm^2 ";
echo "<br>";
echo "Keliling: " . $balok3->getKeliling() . " cm ";
echo "<br>";
echo "Volume: " . $balok3->getVolume() . " cm^3 ";
echo "<br><br>";

// Membuat objek (balok 4)
echo "Balok 4:";
echo "<br>";
echo "Luas: " . $balok4->getLuas() . " cm^2 "; 
echo "<br>";
echo "Keliling: " . $balok4->getKeliling() . " cm ";
echo "<br>";
echo "Volume: " . $balok4->getVolume() . " cm^3 ";
echo "<br><br>";

?>

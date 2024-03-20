<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
class Calculator {
    private $angka1;
    private $angka2;

    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    public function jumlah() {
        return $this->angka1 + $this->angka2;
    }

    public function kurang() {
        return $this->angka1 - $this->angka2;
    }

    public function bagi() {
        if ($this->angka2 != 0) {
            return $this->angka1 / $this->angka2;
        } else {
            return "tidak bisa dibagi dengan 0!";
        }
    }
    public function kali() {
        return $this->angka1 * $this->angka2;
    }

    
}

// echo (panggil objek dari berbeda metode)
$calculator = new Calculator(10, 5);
echo "Hasil penambahan: " . $calculator->jumlah() . "<br>";
echo "Hasil pengurangan: " . $calculator->kurang() . "<br>";
echo "Hasil pembagian: " . $calculator->bagi() . "<br>";
echo "Hasil perkalian: " . $calculator->kali() . "<br>";
?>

<?php

class Buku {
    protected $judul;
    protected $penulis;
    protected $tahunTerbit;
    protected $harga;

    public function __construct($judul, $penulis, $tahunTerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
        $this->harga = $harga;
    }

    public function getInfoBuku() {
        echo "Judul Buku: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahunTerbit . "<br>";
        echo "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
    }
}

class BukuFiksi extends Buku {
    public function getInfoBuku() 
    {
        parent::getInfoBuku();
        echo "Kategori: Fiksi<br>";
    }
}

class BukuNonFiksi extends Buku {
    public function getInfoBuku() 
    {
        parent::getInfoBuku();
        echo "Kategori: Non-Fiksi<br>";
    }
}

?>

<?php
require_once __DIR__ . '/../5. Inheritance/Produk.php';
require_once __DIR__ . '/../5. Inheritance/Komik.php';

// === CHILD CLASS KEDUA (CLASS ANAK) ===

class Game extends Produk{
    // Properti khusus milik Game
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Method khusus milik Game
    public function getInfoProduk() {
        $str = "Game: " . parent::getLabel() . " | Rp. {$this->harga} - {$this->waktuMain} Jam.";
        return $str;
    }
}

// --- BAGIAN OBJECT ---

// Kita buat objek dari class Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("The Last of Us", "Neil Druckmann", "Sony Computer Entertainment", 250000, 50);

// Menjalankan method getInfoProduk dari masing-masing objek
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// Hasil :
// Komik: Masashi Kishimoto, Shonen Jump | Rp. 30000 - 100 Halaman.
// Game: Neil Druckmann, Sony Computer Entertainment | Rp. 250000 - 50 Jam.

?>
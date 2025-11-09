<?php
require_once __DIR__ . '/../6. Override/Produk.php';
require_once __DIR__ . '/../6. Override/Komik.php';


// === CHILD CLASS KEDUA (CLASS ANAK) ===

class Game extends Produk{
    // Properti khusus milik Game
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // --- INTI MATERI: OVERRIDING METHOD ---
    // Method ini 'menimpa' method getInfoProduk() milik parent class (Produk)
    public function getInfoProduk() {
        $infoParent = parent::getInfoProduk();
        return "Game: {$infoParent} - {$this->waktuMain} Jam.";
    }
}

// --- BAGIAN OBJECT ---

// Kita buat objek dari class Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game ("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 250000, 50);

// PHP akan otomatis memanggil method getInfoProduk()
// yang sudah ditimpa (override) di masing-masing class
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// Hasil :
// Komik: Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game: Uncharted | Neil Druckmann, Sony Computer Entertainment (Rp. 250000
?>
<?php
require_once __DIR__ . '/../8. Setter and Getter/Produk.php';
require_once __DIR__ . '/../8. Setter and Getter/Komik.php';

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

// Ini setter
// Properti private yg awalnya "Naruto" diubah menjadi "Goku"
$produk1->setJudul("Goku");
echo $produk1->getInfoProduk();
echo "<br>";

// Ini Getter
// memanggil getJudul dari child class (komik)
echo $produk1->getJudul();
?>
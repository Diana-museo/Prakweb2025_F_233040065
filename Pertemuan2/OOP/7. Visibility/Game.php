<?php
require_once __DIR__ . '/../7. Visibility/Produk.php';
require_once __DIR__ . '/../7. Visibility/Komik.php';

// === CHILD CLASS KEDUA (CLASS ANAK) ===

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Cara mengakses harga dari child class
    // public function getHarga() {
    //     return $this->harga;
    // }

    public function getInfoProduk() {
        $infoParent = parent::getInfoProduk();
        return "Game: {$infoParent} ~ {$this->waktuMain} Jam.";
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game ("Uncharted", "Neil Druckmann", "Sony Computer Entertainment", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";

// Sudah tidak bisa mengakses dan mengubah harga karena sudah di Protected
// $produk1->harga = 12000;
// echo $produk1->Harga;

// Cara memanggil harga yg benar menggunakan method dari child class
echo "Harga Game: Rp. " . $produk2->getHarga();
?>
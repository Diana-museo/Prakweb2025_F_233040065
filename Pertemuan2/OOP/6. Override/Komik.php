<?php
// === CHILD CLASS (CLASS ANAK) ===

class Komik extends Produk{

    public $jmlHalaman;

    // Kita buat Constructor untuk Child Class
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    // --- INTI MATERI: OVERRIDING METHOD ---
    // Method ini 'menimpa' method getInfoProduk() milik parent class (Produk)
    public function getInfoProduk() {
        // 1. Kita tetap panggil method ASLI milik parent class (Produk)
        // menggunakan 'parent :: '
        $infoParent = parent::getInfoProduk();

        // 2. Kita tambahkan info spesifik milik Komik
        return "Komik: {$infoParent} - {$this->jmlHalaman} Halaman.";
    }
}

?>
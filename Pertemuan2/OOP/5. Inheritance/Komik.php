<?php
// === CHILD CLASS (CLASS ANAK) ===
// Kita bisa buat class Komik yang MEWARISI semua
// Properti dan method dari class Produk

class Komik extends Produk{
    // Properti khusus milik Komik
    public $jmlHalaman;

    // Kita buat Constructor untuk Child Class
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        // 'parent :: ' digunakan untuk memanggil
        // constructor milik parent class (Produk)
        // agar properti umum (judul, penulis, penerbit, harga) terisi
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // Set properti khusus memiliki komik
        $this->jmlHalaman = $jmlHalaman;
    }

    // Method khusus milik Komik
    public function getInfoProduk() {
        // 'parent :: ' bisa juga digunakan untuk memanggil
        // method milik parent class (Produk)
        $str = "Komik: " . parent::getLabel() . " | Rp. {$this->harga} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

?>
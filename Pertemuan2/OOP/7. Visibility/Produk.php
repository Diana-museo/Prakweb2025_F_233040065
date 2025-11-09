<?php
// === PARENT CLASS (CLASS INDUK) ===
class Produk{
    // Properti umum
    public $judul, $penulis, $penerbit;
    private $harga;
    
    // Constructor
    public function __construct($judul = "judul", $penulis = "penulis", 
                                $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // METHOD YANG AKAN KITA OVERRIDE (TIMPA) DI CHILD CLASS
    // Ini adalah method 'getInfoProduk' milik class Produk
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getHarga() {
        return $this->harga;
    }
}
?>
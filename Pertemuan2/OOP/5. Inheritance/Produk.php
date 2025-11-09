<?php
// === PARENT CLASS (CLASS INDUK) ===
// Class ini berisi semua properti dan method umum
// yang dimiliki oleh semua produk

class Produk{
    // Properti umum
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    
    // Constructor
    public function __construct($judul = "judul", $penulis = "penulis", 
                                $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method milik Parent
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}
?>
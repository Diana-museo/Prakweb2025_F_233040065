<?php
// === PARENT CLASS (CLASS INDUK) ===
class Produk{
    // INI MATERI : SETTER DAN GETTER
    // Ubah seluruh visibility property menjadi "private"
    // Private hanya bisa diakses pada class dimana dia didefinisikan (Produk)
    private $judul, $penulis, $penerbit, $harga;
    
    // Constructor
    public function __construct($judul = 'judul', $penulis = 'penulis', 
                                $penerbit = 'penerbit', $harga = 'harga') {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Membuat method setter untuk melakukan perubahan pada property protected/private
    public function setJudul($judulBaru) {
        return $this->judul = $judulBaru;
    }

    // kita sudah menggunakan getter sebelumnya
    // getJudul adalah getter
    public function getJudul() {
        return $this->judul;
    }

    // getHarga adalah getter
    public function getHarga() {
        return $this->harga;
    }

    // getLabel adalah getter
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }   

    public function getInfoProduk() {
        $str = "{$this->getJudul()} | {$this->getLabel()} (Rp. {$this->getHarga()})";
        return $str;
    }
}
?>
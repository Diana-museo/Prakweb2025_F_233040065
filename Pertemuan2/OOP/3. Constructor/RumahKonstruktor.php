<?php

// DEFINISI KELAS (DENAH)
class Rumah {
    
    // --- BAGIAN PROPERTY ---
    // 1. Properti kita siapkan (kosongkan nilainya)
    public $warna;
    public $jumlahKamar;
    public $alamat;

    // --- BAGIAN CONSTRUCTOR ---
    // Method ini akan OTOMATIS berjalan
    // Setiap kali 'new Rumah(...)' dipanggil
    public function __construct($warnaAwal, $kamarAwal, $alamatAwal) {
        // 'this' artinya 'object ini'
        // "Set properti 'warna' MILIK OBJEK INI
        // sesuai data '$warnaAwal' yang dikirim"
        $this->warna = $warnaAwal;
        $this->jumlahKamar = $kamarAwal;
        $this->alamat = $alamatAwal;
    }

    // Method lain (masih tetap ada)
    public function kunciPintu() {
        return "Pintu di $this->alamat sudah dikunci!";
    }
}

// --- BAGIAN OBJECT (CARA PAKAI BARU) ---
// 2. Sekarang, saat membuat objek, kita harus mengirim data awal di dalam kurung.
//    Nilai ini akan "dikirim" ke method __construct di atas
$rumahSaya = new Rumah("Biru", 5, "Jl. Merpati No. 10");
$rumahTetangga = new Rumah("Kuning", 2, "Jl. Kenari No. 5");

// --- BUKTI ----
// Properti sudah terisi sesuai data yang dikirim saat pembuatan objek
// tanpa perlu mengisi manual satu per satu
echo "Warna rumah saya: " . $rumahSaya->warna; // Output: Biru
echo "<br>";
echo "Jumlah kamar rumah saya: " . $rumahSaya->jumlahKamar; // Output: 5
echo "<br>";
echo "Alamat rumah tetangga: " . $rumahTetangga->alamat; // Output: Jl. Kenari No. 5
echo "<br>";
echo $rumahTetangga->kunciPintu(); // Output: Pintu di Jl. Kenari No. 5 sudah dikunci!
?>
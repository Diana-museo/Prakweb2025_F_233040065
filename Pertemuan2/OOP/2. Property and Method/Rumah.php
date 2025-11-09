<?php

// DEFINISI KELAS RUMAH
class Rumah {
    
    // --- BAGIAN PROPERTY ---
    public $warna = "Putih";
    public $jumlahKamar = 4;

    // --- BAGIAN METHOD ---
    public function kunciPintu() {
        return "Pintu sudah dikunci!";
    }

    public function gantiWarna($warnaBaru) {
        $this->warna = $warnaBaru; // 'this' mengacu ke objectnya sendiri
    }
}

// --- BAGIAN OBJECT (RUMAH JADI) ---
// 1. Membuat objek pertama dari Class Rumah
$rumahSaya = new Rumah();

// 2. Mengakses properti (melihat data)
echo "Warna awal rumah saya: " . $rumahSaya->warna; // Output: Putih
echo "<br>";

// 3. Menjalankan method (melakukan aksi)
$rumahSaya->gantiWarna("Biru");

// 4. Melihat data lagi setelah diubah
echo "Warna baru rumah saya: " . $rumahSaya->warna; // Output: Biru
echo "<br>";

// 5. Menjalankan method lain
echo $rumahSaya->kunciPintu();
echo "<br>";
echo "<hr>";

// --- BUKTI BAHWA OBJECT ITU UNIK ---
// Kita buat objek baru
$rumahTetangga = new Rumah();
echo "Warna rumah tetangga: " . $rumahTetangga->warna; // Output: Putih
// Warna rumah tetangga tetap Putih, karena objek ini berbeda dengan rumahSaya

?>
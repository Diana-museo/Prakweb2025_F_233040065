<?php
// DEFINISI CLASS (DENAH)
class Rumah {
    // Properti
    public $warna;
    public $alamat;

    // Constructor (Otomatis jalan saat 'new')
    public function __construct($warna, $alamat) {
        $this->warna = $warna;
        $this->alamat = $alamat;
    }
}

// --- INTI MATERI : OBJECT TYPE ---

// Kita membuat fungsi terpisah
// Perhatikan 'Rumah $dataRumah' pada parameter
// Ini adalah 'Type Hinting' atau 'Object Type'
// Fungsi ini SEKARANG HANYA MAU menerima OBJEK DARI Parameter class 'Rumah'

function pasangListrik(Rumah $dataRumah) {
    return "Listrik sedang dipasang di rumah " . $dataRumah->warna .
           " yang beralamat di " . $dataRumah->alamat;
}

// --- BAGIAN OBJECT (CARA PAKAI) ---

// 1. Buat objek dari class Rumah
$rumahSaya = new Rumah("Merah", "Jl. Merdeka No. 10");

// 2. Panggil fungsi pasangListrik dengan mengirim objek rumahSaya
echo pasangListrik($rumahSaya);
// Output: Listrik sedang dipasang di rumah Merah yang beralamat di Jl. Merdeka No. 10.
echo "<br>";

// --- CONTOH ERROR ---
// 3. Coba panggil fungsi pasangListrik dengan data bukan objek Rumah
$teksBiasa = "Ini cuma string";

// Baris di bawah ini jika dijalankan akan menimbulkan ERROR
// echo pasangListrik($teksBiasa);
// PHP akan error karena $teksBiasa bukan objek dari class Rumah
?>
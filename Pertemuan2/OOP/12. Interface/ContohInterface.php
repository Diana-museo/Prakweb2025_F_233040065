<?php
// 1. DEFINISI INTERFACE (KONTRAK)
// Gunakan keyword 'interface'.
interface BisaDimakan {

    // --- ATURAN WAJIB ---
    // 2. Method di Interface selalu 'public' dan TIDAK PUNYA ISI (abstrak).
    // Ini adalah "KONTRAK" wajib: Setiap class yang mengimplementasi ini harus mengisi method ini.
    public function makan();
}

// 3. CLASS PERTAMA: Menerapkan Kontrak
// Apel "implements" (mengimplementasikan) kontrak BisaDimakan.
class Apel implements BisaDimakan {

    // 4. Implementasi Wajib
    // Jika method 'makan()' ini tidak ada, PHP akan ERROR!
    // Apel mengisi kontrak 'makan()' dengan logikanya sendiri.
    public function makan() {
        return "Apel dimakan: Langsung kunyah";
    }
}

// 5. CLASS KEDUA: Menerapkan Kontrak yang Sama
// Jeruk juga "implements" kontrak yang sama.
class Jeruk implements BisaDimakan {

    // 6. Implementasi Wajib
    // Meskipun method-nya sama, logikanya berbeda!
    public function makan() {
        return "Jeruk dimakan: Kupas dulu, baru kunyah";
    }
}

// 7. Cara Penggunaan
$apel = new Apel();
$jeruk = new Jeruk();

echo $apel->makan(); // pel dimakan: Langsung kunyah
echo "<br>";
echo $jeruk->makan(); // Jeruk dimakan: Kupas dulu, baru kunyah
?>
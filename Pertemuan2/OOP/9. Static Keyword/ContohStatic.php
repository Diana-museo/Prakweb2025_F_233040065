<?php
// Buat sebuah class untuk membuat property dan method static

class ContohStatic {
    // Cara penulisan untuk property :
    // visibilty + static + variable.
    public static $angka = 1;

    // Cara penulisan untuk method :
    // visibilty + static + function + nama function.

    public static function hallo() {
        return 'Hallo' . self::$angka;
    }
}

// Mengakses static propert
// Perhatikan : Kita tidak perlu 'new ContohStatic()'
// Kita panggil langsung class-nya
echo ContohStatic::$angka;

// Menjalankan static method
echo ContohStatic::hallo();
?>
<?php
// === Membuat Constant menggunakan define() ===
// Define memerlukan 2 parameter
// Parameter: nama variable dan nilai nya
// Ketika membuat constant, biasanya nama variable nya KAPITAL
define("NAMA", "Hikmal Ryvaldi");

// === Membuat Constant menggunakan cost ===
// Sama seperti define nama variable nya KAPITAL
const NRP = 22304000;

// Untuk mengaksesnya sama seperti akses variable biasa
echo NAMA;
echo "<br>";
echo NRP;
echo "<br>";

class CobaConstant {
    // define('COBA', 'BEBAS'); // ERROR
    const JURUSAN = "Teknik Informatika";
}

// Cara mengakses constant sama seperti static
echo CobaConstant::JURUSAN;
?>
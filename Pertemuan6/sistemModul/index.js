// File: index.js

// Impor modul kasir yang kita buat tadi
const kasir = require('./kasir');

// Jalankan programnya
const tagihan = kasir.hitungTotal(2, 5); // 2 buku dan 5 pensil
kasir.cetakStruk(tagihan);
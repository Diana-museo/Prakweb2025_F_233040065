// File: index.js

// --- DATA & RUMUS (Numplek disini semua) ---
const namaToko = "Toko Serba Ada";
const hargaBuku = 50000;
const hargaPensil = 2000;

function hitungTotal(jmlBuku, jmlPensil) {
    return (jmlBuku * hargaBuku) + (jmlPensil * hargaPensil);
}

function cetakStruk(total) {
    console.log("=== " + namaToko + " ===");
    console.log("Total Belanja: Rp " + total);
    console.log("Terima Kasih!");
}

// --- BAGIAN PENTING: Ekspor supaya bisa dipakai file lain
module.exports = {
    hitungTotal,
    cetakStruk
};
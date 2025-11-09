<?php
// Memanggil init untuk menjalankan autoload
require_once __DIR__ . '/App/init.php';

// instance sebuah class
$cat = new Cat();
echo $cat->run(); // menjalankan method di dalamnya
?>
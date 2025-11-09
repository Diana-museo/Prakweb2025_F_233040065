<?php
// -- KENAPA INI ABSTRACT CLASS? --
// Konsep Umum: Class Animal (Hewan) adalah konsep yang terlalu umum'
// Kita tidak mungkin membuat object 'new Hewan()'.
// Kita selalu membuat 'new Kucing()', 'new Anjing()', dst.

// 1. Definisi class Animal
abstract class Animal {
    public $name = "Kucing";

    // -- INTI ABSTRACT METHOD --
    // 2. Abstract Method
    // Method ini HANYA deklarasi, tidak punya isi ({})
    // Ini adalah 'KONTRAK' atau 'ATURAN WAJIB' untuk semua Child Class (turunan)
    // Child Class dipaksan untuk 'Override' dan mengisi method ini
    public abstract function run();
}

// 3. Child Class (Turunan)
// Class Cat adalah class yang mewarisi (extend) animal.
class Cat extends Animal {
    // 4. Implementasi wajib
    // Jika method 'run()' ini tidak ada, PHP akan ERROR!
    // Karena Cat 'berjanji' untuk mengisi kontrak 'run()' dari Parent Abstract-nya
    public function run() {
        // Di sini kita definisikan perilaku 'run' yang spesifik untuk Cat.
        return "$this->name itu berlari!";
    }
}

// 5. Cara Penggunaan 
// Kita hanya bisa membuat object dari class turunannya (Cat)
$cat = new Cat();
echo $cat->run(); // Output: Kucing itu berlari!
?>
<?php
// Abstract Class dengan 1 minimal abstratc method
abstract class Animal {
    public $name = "Kucing";

    // Wajib dimiliki oleh child nya
    public abstract function run();
}
?>
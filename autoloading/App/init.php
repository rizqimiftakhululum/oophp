<?php
// Kurang Efektif karena ngetik 1 per 1
/*
require_once 'Produk/InfoProduk.php';
require_once 'Produk/Produk.php';
require_once 'Produk/Komik.php';
require_once 'Produk/Game.php';
require_once 'Produk/CetakInfoProduk.php';


// lebih baik menggunakan direktori lengkap
spl_autoload_register(function ($class) {
	require_once 'Produk/' . $class . '.php';
});
*/

// Agar lebih Lengkap Bisa Menggunakan __DIR__
spl_autoload_register(function ($class) {
	require_once __DIR__ . '/Produk/' . $class . '.php';
});

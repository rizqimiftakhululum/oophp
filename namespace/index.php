<?php

require_once 'App/init.php';


// $produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";

// Menggunakan Alias Supaya Lebih Simpel.
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

echo "<hr>";
// Kalo yang ini manggilnya masih Ribet karena kalo namespaces nya panjang lebih baik menggunakan alias.
// namespace Vendor\Namespace\SubNamespace
new App\Service\User();
echo "<br>";
new App\Produk\User();

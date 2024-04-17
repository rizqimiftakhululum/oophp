<?php

class Produk
{
	public $judul,
		$penulis,
		$penerbit,
		$harga,
		$jmlHalaman;

	public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	// public function getInfoProduk()
	// {
	// 	// komik : Naruto | Mashashi Kishimuto, Shonen Jump (Rp. 30000) - 100 Halaman.
	// 	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
	// 	return $str;
	// }
}

class Komik extends Produk
{
	public function getInfoProduk()
	{
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}
class Game extends Produk
{
	public function getInfoProduk()
	{
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jmlHalaman} Jam.";
		return $str;
	}
}

// class CetakInfoProduk
// {
// 	public function cetak(Produk $produk)
// 	{
// 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
// 		return $str;
// 	}
// }

$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

<?php

class Game extends Produk implements InfoProduk
{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0, $waktuMain)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfo()
	{
		// komik : Naruto | Mashashi Kishimuto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduk()
	{
		$str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

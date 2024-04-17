<?php

class Komik extends Produk implements InfoProduk
{
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfo()
	{
		// komik : Naruto | Mashashi Kishimuto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getInfoProduk()
	{
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

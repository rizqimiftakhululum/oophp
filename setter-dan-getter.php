<?php

class Produk
{
	private $judul,
		$penulis,
		$penerbit,
		$harga;

	protected	$diskon = 0;

	public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul($judul)
	{
		return $this->judul = $judul;
	}

	public function getJudul()
	{
		return $this->judul;
	}

	public function setPenulis($penulis)
	{
		return $this->penulis = $penulis;
	}

	public function getPenulis()
	{
		return $this->penulis;
	}

	public function setPenerbit($penerbit)
	{
		return $this->penerbit = $penerbit;
	}

	public function getPenerbit()
	{
		return $this->penerbit;
	}

	public function setHarga($harga)
	{
		return $this->harga = $harga;
	}

	public function getHarga()
	{
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;
	}

	public function getDiskon()
	{
		return $this->diskon;
	}

	public function getLabel()
	{
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk()
	{
		// komik : Naruto | Mashashi Kishimuto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
}

class Komik extends Produk
{
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk()
	{
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}
class Game extends Produk
{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "Penulis", $penerbit = "penerbit", $harga = 0, $waktuMain)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk()
	{
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Mashasi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Rizqi Miftakhul Ulum");
echo $produk1->getPenulis();

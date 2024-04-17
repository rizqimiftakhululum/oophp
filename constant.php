<?php


define('NAMA', 'Rizqi Miftakhul Ulum'); // tidak bisa di simpan di dalam kelas
echo NAMA;

const UMUR = 20; // bisa di simpan di dalam kelas
var_dump(UMUR);

class Coba
{
	const NAMA = "Rizqi";
	// define('NAMA', 'Saya');

}
echo Coba::NAMA;

// Magic Constant
// echo __DIR__;
// echo __FILE__;
// echo __LINE__;
// echo __CLASS__;
// echo __TRAIT__;
// echo __METHOD__;
// echo __FUNCTION__;
// echo __NAMESPACE__;

class ContohMagicClass
{
	const NAMA_CLASS = __CLASS__;
}
echo ContohMagicClass::NAMA_CLASS;

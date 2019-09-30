<?php 
class Komik extends Produk implements InfoProduk{
	public $jmlHal;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0 ) {
		parent::__construct ($judul, $penulis , $penerbit, $harga);
		$this->jmlHal = $jmlHal;

	}

	public function setDiskon ($diskon) {
		$this->diskon = $diskon;
	}

	public function getDiskon () {
		return $this->diskon;
	}

	public function getInfo(){
		$str = " {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
	return $str;
	}	

	public function getInfoLengkap(){
		// $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHal} Halaman.";
		$str = "Komik : " . $this->getInfo() . "- {$this->jmlHal} Halaman.";
		return $str;
	}
}
 ?>
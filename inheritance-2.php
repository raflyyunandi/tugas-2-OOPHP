<?php 

// Jualan Produk
// Komik dan Game

class Produk {
	// public 	$judul = "judul",
	// 		$penulis = "penulis",
	// 		$penerbit = "penerbit",
	// 		$harga = 0 ;
	public 	$judul ,
			$penulis ,
			$penerbit ,
			$harga ,
			$jmlHal ,
			$lamaMain, 
			$tipe;

	// public function __construct($judul, $penulis, $penerbit, $harga)
			public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $lamaMain = 0, $tipe){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHal = $jmlHal;
			$this->lamaMain = $lamaMain;
			$this->tipe = $tipe;
	}		

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}	

	// public function sayHello(){
	// 	return "Hello World";
	// }

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHal} Halaman.";
		} else if ($this->tipe == "Game") {
			$str .= " ~ {$this->lamaMain} Jam.";
		}
		return $str;
	}		

}

class CetakInfoProduk {
	public function cetak ($produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}



// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);

// $produk3 = new Produk();
// $produk3 -> judul = "Tokyo Ghoul";
// $produk3 -> penulis = "Ishida Sui";
// $produk3 -> penerbit = "Shonen Jump";
// $produk3 -> harga = 90000;

$produk3 = new Produk ("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000, 100, 0, "Komik");
$produk4 = new Produk ("Uncharted", "Neil Druckman", "Sony Computer", 75000, 0, 50, "Game");
// $produk5 = new Produk ("Dragon Ball");
// $produk4 = new Produk();
// $produk4 -> judul = "Uncharted";
// $produk4 -> penulis = "Neil Druckman";
// $produk4 -> penerbit = "Sony Computer";
// $produk4 -> harga = 75000;


echo "Komik : " . $produk3 -> getLabel();
echo "<br>";
echo "Game : " . $produk4 -> getLabel();
echo "<br>";
// var_dump($produk5);
echo "<br>";
$cip3 = new CetakInfoProduk();
echo $cip3->cetak($produk3);

echo "<br>";
echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();
 ?>
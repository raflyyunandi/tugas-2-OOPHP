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
			$harga ;

	// public function __construct($judul, $penulis, $penerbit, $harga)
			public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
	}		

	public function getLabel(){
		return "$this->penulis, $this->penerbit, $this->harga";
	}	

	// public function sayHello(){
	// 	return "Hello World";
	// }			
}

// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);

// $produk3 = new Produk();
// $produk3 -> judul = "Tokyo Ghoul";
// $produk3 -> penulis = "Ishida Sui";
// $produk3 -> penerbit = "Shonen Jump";
// $produk3 -> harga = 90000;

$produk3 = new Produk ("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000);
$produk4 = new Produk ("Uncharted", "Neil Druckman", "Sony Computer", 75000);
$produk5 = new Produk ("Dragon Ball");
// $produk4 = new Produk();
// $produk4 -> judul = "Uncharted";
// $produk4 -> penulis = "Neil Druckman";
// $produk4 -> penerbit = "Sony Computer";
// $produk4 -> harga = 75000;


echo "Komik : " . $produk3 -> getLabel();
echo "<br>";
echo "Game : " . $produk4 -> getLabel();
echo "<br>";
var_dump($produk5);
 ?>
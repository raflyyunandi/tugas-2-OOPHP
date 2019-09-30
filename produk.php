<?php 

// Jualan Produk
// Komik dan Game

class Produk {
	public 	$judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0 ;
}

// $produk1 = new Produk();
// $produk1 -> judul = "Naruto";
// var_dump($produk1);

$produk3 = new Produk();
$produk3 -> judul = "Tokyo Ghoul";
$produk3 -> penulis = "Ishida Sui";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 90000;

echo "Komik : $produk3->penulis, $produk3->penerbit ";

 ?>
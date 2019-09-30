<?php 

require_once 'App/init.php';

// $produk3 = new Komik ("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000, 100);
// $produk4 = new Game ("Uncharted", "Neil Druckman", "Sony Computer", 75000, 50);

// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk ($produk3);
// $cetakProduk->tambahProduk ($produk4);
// echo $cetakProduk->cetak();

// new Coba();

new App\Service\User();
echo "<hr>";
new App\Produk\User();
 ?>
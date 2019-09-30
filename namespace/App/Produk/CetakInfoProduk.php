<?php 

class cetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk (Produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $key ) {
			$str .= "- {$key->getInfoLengkap()} <br>";
		}
		return $str;
	}
}

 ?>
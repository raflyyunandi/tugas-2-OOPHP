<?php 
// class ContohStatic {
// 	public static $angka = 1;

// 	public static function halo() {
// 		return "Halo " . self::$angka++ . " kali";

// 	}
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class ContohStatic2 {
	public static $angka = 1;

	public function halo(){
		return "halo".self::$angka++ . " kali. <br>";

	}
 
}
$obj = new ContohStatic2;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new ContohStatic2;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
 ?>

<?php 

define('NAMA', 'Rafly Yunandi A');
echo NAMA;

echo "<br>";

const UMUR = 32;
echo UMUR;

echo "<hr>";


class Coba {
	const NAMA = "Rafly";
}

echo Coba::NAMA;
echo "<hr>";
 
function coba() {
	return __FUNCTION__;
}

echo coba();

 ?>

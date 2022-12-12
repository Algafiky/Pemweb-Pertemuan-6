<?php
function AngkaToRomawi($angka)
{
	 $angka = intval($angka);
	 $result = '';
	 
	 $array = array('M' => 1000,
	 'D' => 500,
	 'C' => 100,
	 'L' => 50,
	 'X' => 10,
	 'V' => 5,
	 'I' => 1);
	 
	 foreach($array as $romawi => $value){
	  $matches = intval($angka/$value);
	 
	  $result .= str_repeat($romawi,$matches);
	 
	  $angka = $angka % $value;
	 } 
	 return $result;
}
	echo AngkaToRomawi(59);
?>

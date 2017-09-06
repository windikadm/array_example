<?php

$transportasi = array ("angkot", "bus", "gojek", "pesawawt", "kapal", "kereta api");
$arrlength = count ($transportasi);

for($x = 0; $x < $arrlength; $x++) {

	echo ($transportasi)[$x];
	echo "<br>";
}

// foreach ($transportasi as $key =>  $value) {
	// echo $key." : ".$value."<br>";
// }

?>
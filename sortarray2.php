<?php 
$kota = array ("purbalingga","purwokerto","banjarnegara");
rsort($kota);

$clength = count($kota);
for($x = 0; $x < $clength; $x++) {
	echo $kota[$x];
	echo "<br>";
	echo "<hr>";
}
?>
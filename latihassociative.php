<?php
$adobe = array("adobe ilustrator", "adobe dreamweaver", "adobe photoshop");
ksort($adobe);
$arrlength = count($adobe);
for ($x = 0;  $x < $arrlength; $x++) {
	echo $adobe [$x];
	echo "<br>";
}
?>
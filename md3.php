<?php

$laptop = array
	(
	array("Asus K4eu",12,8),
	array("Accer e2e3",12,80),
	array("Lenovo dr12",23,84),
	array("Dell df12",21,11,),
	array("Toshiba",12,11)
	);
	
	
for ($row = 0; $row < 4; $row++) {
	echo "<p><b> Ini Baris Ke $row</b></p>";
	echo "<ul>";
		for ($col = 0; $col <3 ; $col++) {
	echo "<li>".$laptop[$row] [$col]. "</li>";
	}
	echo"</ul>";
}
?>
<?php

$cars = array
	(
	array("Volvo",22, 18),
	array("BMW",18, 20),
	array("Tamiya",20, 1),
	array("MClarren", 0, 1)
	);
	
		echo $cars[0] [0]. ": in stock: ".$cars[0] [1].", sold: ".$cars[0] [2].".<br>";
		echo $cars[1] [0]. ": in stock: ".$cars[1] [1].", sold: ".$cars[1] [2].".<br>";
		echo $cars[2] [0]. ": in stock: ".$cars[2] [1].", sold: ".$cars[2] [2].".<br>";
		echo $cars[3] [0]. ": in stock: ".$cars[3] [1].", sold: ".$cars[3] [2].".<br>";
?>
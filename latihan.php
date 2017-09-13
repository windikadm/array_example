<?php
$minuman =array ("milo"=>"500", "marimas"=>"300", "yakul"=>"1000");
sort($minuman); 

foreach ($minuman as $x => $x_value) {
	echo "Key=" . $x . ", Value="    . $x_value;
	echo "<br>" . "<hr>";	
}
?>
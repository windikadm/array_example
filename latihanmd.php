<?php
$mouse  = array
	(
	array("logitech",22,30),
	array("Votre",150,120),
	array("Razer",120,100),
	array("Diklik",150,150)
	);
sort ($mouse);
echo $mouse [0][0].": Persediaan: ".$mouse[0][1].", terjual: ".$mouse[0][2].".<br>"."<hr>";
echo $mouse [1][0].": Persediaan: ".$mouse[1][1].", terjual: ".$mouse[1][2].".<br>"."<hr>";
echo $mouse [2][0].": Persediaan: ".$mouse[2][1].", terjual: ".$mouse[2][2].".<br>"."<hr>";
echo $mouse [3][0].": Persediaan: ".$mouse[3][1].", terjual: ".$mouse[3][2].".<br>"."<hr>";

?>
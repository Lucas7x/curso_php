<?php 
	$dt = new DateTime("2001-09-11");
	$periodo = new DateInterval("P15D");

	echo $dt->format("d/m/Y H:i:s");


	echo "<br>";
	$dt->add($periodo);		//add tempo
	echo $dt->format("d/m/Y H:i:s");

	echo "<br>";
	$dt->add(new DateInterval("P2M"));		//add tempo
	echo $dt->format("d/m/Y H:i:s");


?>
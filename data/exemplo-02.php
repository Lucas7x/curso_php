<?php 
	$ts = strtotime("2001-09-11");
	$tt = strtotime("2001-09-11 +2 months");
	echo date("l, d/m/Y", $ts);
	echo "<br>";
	echo date("l, d/m/Y", $tt);
?>
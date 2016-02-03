<?php
	$n	= 1 ; 
	echo "<h5>Switch</h5>" ;
	echo '$n ';
	switch ($n) {
		case 0:
			echo "equals 0" ; 
			break;
		case 1 :
			echo "equals 1" ; 
			break;
		default:
			echo "Tidak ditemukan di dalam case" ; 
			break;
	}
?>
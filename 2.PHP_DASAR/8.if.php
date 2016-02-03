<?php
	$n1 	= 10 ; 
	$n2 	= 20 ; 

	//1. IF 
	echo "<h5>IF</h5>" ; 
	echo "10 > 20 ? " ; 
	if($n1 > $n2){
		echo "Nilai pertama lebih besar dari nilai kedua" ; 
	}

	//1.1 BENTUK IF 1 BARIS
	//(STATEMENT) ? HASIL BENAR : HASIL SALAH ;
	echo "<h5>IF 1 BARIS</h5>" ; 
	echo "10 > 20 ? " ; 
	echo ($n1 > $n2) ? "Nilai pertama lebih besar dari nilai kedua" : "Nilai kedua lebih besar dari nilai pertama" ; 

	//2. IF ELSE
	echo "<h5>IF ELSE</h5>" ; 
	echo "10 > 20 ? " ; 
	if($n1 > $n2){
		echo "Nilai pertama lebih besar dari nilai kedua " ; 
	}else{
		echo "Nilai pertama lebih kecil dari nilai kedua" ; 
	}

	//3. IF ELSE
	echo "<h5>IF ELSE</h5>" ; 
	echo "10 < 20 ? " ; 
	if($n1 > $n2){
		echo "Nilai pertama lebih besar dari nilai kedua " ; 
	}else if($n1 < $n2){
		echo "Nilai pertama lebih kecil dari nilai kedua" ; 
	}else{
		echo "Nilai pertama lebih sama dengan nilai kedua" ; 
	}
?>
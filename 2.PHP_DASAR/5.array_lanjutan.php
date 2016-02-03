<?php 
	$vaskalar		= array("Index ke 0","Index ke 1") ; 	//mengisi variable dengan array

	echo "<h3>Array Skalar</h3>" ; 
	echo "index ke-0 : " . $vaskalar[0] . "<br />" . "index ke-1 : " . $vaskalar[1] ; 

	$vaassosiatif	= array("ke0"=>"data pertama","oke"=>1); //deklarasi variable dengan array 

	echo "<h3>Array Assosiatif</h3>" ; 
	echo "index 'ke0' : " . $vaassosiatif["ke0"] . "<br />" . "index 'oke' : " . $vaassosiatif["oke"] ; 

	$vamultidimensi 	= array(
							1=>array("Isi Array 0","Isi Array 1","ok"=>"Isi Array ok") 
							) ;  
 
	echo "<h3>Array Multidimensi</h3>" ; 
	echo '$vamultidimensi[1][0] : ' . $vamultidimensi[1][0] . 
		"<br />" . '$vamultidimensi[1][1] : ' . $vamultidimensi[1][1] .
		"<br />" . '$vamultidimensi[1]["ok"] : ' . $vamultidimensi[1]["ok"] ; 
?>
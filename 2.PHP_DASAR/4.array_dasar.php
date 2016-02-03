<?php 
	$vaskalar		= array() ; 					//deklarasi array kosong
	$vaskalar[0]	= "Index ke 0";					//index ke 0
	$vaskalar[]		= "Index ke 1" ; 				//index ke 1 otomatsi mengikuti index sebelumnya

	echo "<h3>Array Skalar</h3>" ; 
	echo "index ke-0 : " . $vaskalar[0] . "<br />" . "index ke-1 : " . $vaskalar[1] ; 

	$vaassosiatif	= array(); 						//deklarasi array kosong
	$vaassosiatif["ke0"]	= "data pertama" ; 		//index ke0
	$vaassosiatif["oke"]	= 1 ; 					//index oke

	echo "<h3>Array Assosiatif</h3>" ; 
	echo "index 'ke0' : " . $vaassosiatif["ke0"] . "<br />" . "index 'oke' : " . $vaassosiatif["oke"] ; 

	$vamultidimensi		= array() ; 				//deklarasi array kosong
	$vamultidimensi[1]	= array() ; 				//deklarasi array kosong dalam index 1
	$vamultidimensi[1][]		= "Isi Array 0" ; 	//index 1 array ke 0
	$vamultidimensi[1][]		= "Isi Array 1" ; 	//index 1 array ke 1
	$vamultidimensi[1]["ok"]	= "Isi Array ok" ; 	//index 1 array "oke"

	echo "<h3>Array Multidimensi</h3>" ; 
	echo '$vamultidimensi[1][0] : ' . $vamultidimensi[1][0] . 
		"<br />" . '$vamultidimensi[1][1] : ' . $vamultidimensi[1][1] .
		"<br />" . '$vamultidimensi[1]["ok"] : ' . $vamultidimensi[1]["ok"] ; 
?>
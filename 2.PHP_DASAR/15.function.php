<?php
	/*Function passing by value*/
	function fvhitung($nharga){
		$nharga	= $nharga - (0.1*$nharga) ; 
		return $nharga ; 
	}

	$nharga 	= 2500 ; 
	echo "<h3>Fuction passing by value</h3>" ; 
	echo fvhitung($nharga) ; 
	echo "<br />";
	echo $nharga ;

	/*Function passing by reference*/
	function frhitung(&$nharga){
		$nharga	= $nharga - (0.1*$nharga) ; 
		return $nharga ; 
	}

	$nharga 	= 9000 ; 
	echo "<h3>Fuction passing by reference</h3>" ; 
	echo frhitung($nharga) ; 
	echo "<br />";
	echo $nharga ; 

	/*Function passing by default*/
	function fdhitung($nharga=10000){
		$nharga	= $nharga - (0.1*$nharga) ; 
		return $nharga ; 
	}

	$nharga 	= 23000 ; 
	echo "<h3>Fuction passing by default</h3>" ; 
	echo fdhitung() ; 
	echo "<br />";
	echo fdhitung($nharga) ; 

?>
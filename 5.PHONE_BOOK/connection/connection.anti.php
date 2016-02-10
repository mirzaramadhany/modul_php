<?php 
	session_name("PHONE_BOOK") ;
	session_start() ; 
	require_once 'pdo.mysql.php' ;  //memanggil / menghubungkan pdo.mysql.php
	$mydb 	= new mydb() ; 			//deklarasi koneksi
	$mydb->connect("localhost","root","","learning_pb") ; //mengaktifkan koneksi ke database learning

	foreach ($_POST as $cKey => $cValue) {
        $_POST[$cKey]   = data_secure($cValue) ; 
    }
    foreach ($_GET as $cKey => $cValue) {
        $_GET[$cKey]    = data_secure($cValue) ; 
    }

	function data_secure($cdata){
		$cparse 		= (stripslashes(strip_tags(htmlspecialchars($cdata ,ENT_QUOTES))));
		return $cparse;
	}  
?> 
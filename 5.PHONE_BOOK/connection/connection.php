<?php 
	session_name("PHONE_BOOK") ;
	session_start() ; 
	require_once 'pdo.mysql.php' ;  //memanggil / menghubungkan pdo.mysql.php
	$mydb 	= new mydb() ; 			//deklarasi koneksi
	$mydb->connect("localhost","root","","learning_pb") ; //mengaktifkan koneksi ke database learning
?> 
<?php 
	require_once './pdo.mysql.php' ;  //memanggil / menghubungkan pdo.mysql.php
	$mydb 	= new mydb() ; 			//deklarasi koneksi
	$mydb->connect("localhost","root","","learning") ; //mengaktifkan koneksi ke database learning
?>
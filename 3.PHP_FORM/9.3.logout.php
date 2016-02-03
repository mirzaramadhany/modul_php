<?php 
	session_start() ; 
	
	unset($_COOKIE['username']); //hapus cookies
    setcookie('username', null, -1, '/'); //hilangkan cookies dari browser

	session_destroy() ; //hapus semua session
	header("location: ./9.0.login.php?error=Berhasil logout") ; 
?>
<?php 
	unset($_COOKIE['user']); //hapus cookies
	unset($_COOKIE['fullname']);
	unset($_COOKIE['lv']);
	unset($_COOKIE['pic']);

    setcookie('user', null, -1, '/'); //hilangkan cookies dari browser
    setcookie('fullname', null, -1, '/');
    setcookie('lv', null, -1, '/');
    setcookie('pic', null, -1, '/');

	session_destroy() ; //hapus semua session
	header("location: ./index.php") ; 
?>
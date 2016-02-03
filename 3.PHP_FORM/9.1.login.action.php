<?php
	session_start() ; //mengaktifkan session digunakan untuk menyimpan data login

	if(isset($_POST['btnlogin'])){
		$cusername 	= isset($_POST['cusername']) ? $_POST['cusername'] : "" ; 
		$cpassword	= isset($_POST['cpassword']) ? $_POST['cpassword'] : "" ; 
		$cpassword 	= md5($cpassword) ; //encryption standart password

		if($cusername == "mirza" && $cpassword == "ac43724f16e9241d990427ab7c8f4228"){
			$_SESSION['username']	= $cusername ; 
			if(isset($_POST['ckremember'])){//aktifkan cookies
				setcookie("username", $cusername , time() + 86400 , "/"); // 86400 = 1 day
			} 
			header("location: ./9.2.dashboard.php") ;
		}else{
			header("location: ./9.0.login.php?error=User dan Password tidak ditemukan") ; 
		}

	}
?>
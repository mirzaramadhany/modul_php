<?php 
$cerror 		= "" ;  
if(isset($_POST['btnsave'])){
	//mengambil data dengan name cuser menggunakan if 1 baris
	$cuser 		= isset($_POST['cuser']) ? $_POST['cuser'] : "" ; 
	$cfullname 	= isset($_POST['cfullname']) ? $_POST['cfullname'] : "" ;
	$cpassword 	= isset($_POST['cpassword']) ? $_POST['cpassword'] : "" ;
	$clv	 	= isset($_POST['clv']) ? $_POST['clv'] : "editor" ;

	if($cuser == "" || strlen($cuser) < 5){
		/*Jika nama kosong / jika nama kurang dari 5 huruf*/
		// .= merupakan pointer yang digunakn untuk melanjutkan isi dari variable sebelumnya
		$cerror .= "UserName lenght must be 5 char" ; 
	}
	if($cfullname == "" || strlen($cfullname) < 5){
		/*Jika nama kosong / jika nama kurang dari 5 huruf*/
		$cerror .= "FullName lenght must be 5 char" ; 
	}
	if(trim($cpassword) == ""){
		/*Jika alamat kosong*/
		if($cerror !== "") $cerror .= "<br />" ; 
		$cerror .= "Password is empty" ; 
	}

	//cek ketersediaan username
	$csql	 	= "SELECT user FROM username WHERE user = '$cuser'" ; 
	$dbdata 	= $mydb->execute_sql($csql) ; 
	if($mydb->rows($dbdata) > 0 ){
		if($cerror !== "") $cerror .= "<br />" ; 
		$cerror	.= "UserName invalid" ; 
	}

	if($cerror !== ""){
		echo '<div class="alert alert-danger" role="alert">'.$cerror.'</div>' ;
	}else{
		//upload gambar terlebih dahulu
		$crefile 		= "" ; 
		if(!empty($_FILES['fpic'])){
			$cdir 		= "./image/profile/" ; 
			$vafile		= pathinfo($_FILES['fpic']['name']) ; 
			$cfile 		= $cdir . $cuser . "." . $vafile['extension'] ; 
			if(is_file($cfile)) unlink($cfile) ; 
			if( move_uploaded_file($_FILES['fpic']['tmp_name'], $cfile) ){
				$crefile= $cfile ; 
			}
		}

		$cpassword 	= md5($cpassword) ; //encrypt password terlebih dahulu

		//simpan data ke database 
		$csql 		= "INSERT INTO username 
							(user,fullname,password,lv,pic,datetime_insert) 
						VALUES 
						('$cuser','$cfullname','$cpassword','$clv',
							'$crefile','".date("Y-m-d H:i:s")."')" ; 
		$mydb->execute_sql($csql) ;
		header("location: index.php?cpage=/user/view&cmessage=Data saved")  ; //kembali ke halaman data.view
	}
} 
?>
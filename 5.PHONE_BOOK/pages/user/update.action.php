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

		$csql 		= "UPDATE username SET fullname = '$cfullname',lv = '$clv'" ; 
		if($cpassword !== ""){
			$cpassword 	= md5($cpassword) ; //encrypt password terlebih dahulu
			$csql	   .= ",password = '$cpassword'" ; 
		}
		if($crefile !== ""){
			$csql 	   .= ",pic = '$crefile'" ; 
		}
		$csql 	   .= " WHERE user = '$cuser'" ; 

		//simpan data ke database 
		$mydb->execute_sql($csql) ;
		//kembali ke halaman data.view
		header("location: index.php?cpage=/user/view&cmessage=Data updated")  ;
	}
} 
?>
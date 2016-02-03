<?php 
$cerror 		= "" ;  
if(isset($_POST['btnsave'])){
	//mengambil data dengan name cuser menggunakan if 1 baris
	$cfirst_name 		= isset($_POST['cfirst_name']) ? $_POST['cfirst_name'] : "" ; 
	$clast_name 		= isset($_POST['clast_name']) ? $_POST['clast_name'] : "" ;
	$caddress 			= isset($_POST['caddress']) ? $_POST['caddress'] : "" ;
	$cemail 			= isset($_POST['cemail']) ? $_POST['cemail'] : "" ;
	$cphone 			= isset($_POST['cphone']) ? $_POST['cphone'] : "" ;
	$ccompany 			= isset($_POST['ccompany']) ? $_POST['ccompany'] : "" ;
	$cposition	 		= isset($_POST['cposition']) ? $_POST['cposition'] : "" ;

	if(trim($cfirst_name) == ""){
		$cerror .= "First Name is empty" ;
	}
	if(trim($clast_name) == ""){
		if($cerror !== "") $cerror .= "<br />" ; 
		$cerror .= "Last Name is empty" ;
	}
	if(trim($caddress) == ""){
		if($cerror !== "") $cerror .= "<br />" ; 
		$cerror .= "Address is empty" ;
	}
	if(trim($cemail) == "" || !filter_var($cemail, FILTER_VALIDATE_EMAIL) ){
		if($cerror !== "") $cerror .= "<br />" ; 
		$cerror .= "Email is empty" ;
	}
	if(trim($cphone) == ""){
		if($cerror !== "") $cerror .= "<br />" ; 
		$cerror .= "Phone is empty" ;
	}

	if($cerror !== ""){
		echo '<div class="alert alert-danger" role="alert">'.$cerror.'</div>' ;
	}else{
		//upload gambar terlebih dahulu
		$crefile 		= "" ; 
		if(!empty($_FILES['fpic'])){
			$cdir 		= "./image/pb/" ; 
			$vafile		= pathinfo($_FILES['fpic']['name']) ; 
			$cfile 		= $cdir . time() . "." . $vafile['extension'] ; 
			if(is_file($cfile)) unlink($cfile) ; 
			if( move_uploaded_file($_FILES['fpic']['tmp_name'], $cfile) ){
				$crefile= $cfile ; 
			}
		}

		//simpan data ke database 
		$cusername 	= $_SESSION['user'] ; 
		$csql 		= "INSERT INTO phone_book 
						(first_name,last_name,address,email,phone,company,
							position,pic,username,datetime_insert) 
						VALUES 
						('$cfirst_name','$clast_name','$caddress','$cemail',
							'$cphone','$ccompany','$cposition','$crefile',
							'$cusername','".date("Y-m-d H:i:s")."')" ; 
		$mydb->execute_sql($csql) ;
		//kembali ke halaman data.view
		header("location: index.php?cpage=/pb/view&cmessage=Data saved")  ; 
	}
} 
?>
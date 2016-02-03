<?php
	if(isset($_POST['btnsimpan'])){
		/*
			jika terdapat data dalam variable global POST dengan name btnsimpan 
			btnsimpan yang terdapat di form
		*/
		$cerror 	= "" ; 
		$crefile 	= "" ; 
		$cnama 		= isset($_POST['cnama']) ? $_POST['cnama'] : "" ; //mengambil data dengan name cnama menggunakan if 1 baris
		if($cnama == "" || strlen($cnama) < 5){
			/*Jika nama kosong / jika nama kurang dari 5 huruf*/
			$cerror .= "Nama harus lebih dari 4 huruf" ; // .= merupakan pointer yang digunakn untuk melanjutkan isi dari variable sebelumnya
		}
		if(isset($_FILES['ffoto'])){//jika terdapat gambar
			$cdir 		= "./7.upload/" ; 
			$vafile		= pathinfo($_FILES['ffoto']['name']) ; 
			$cfile 		= $cdir . $cnama . time() . "." . $vafile['extension'] ; 
			if( move_uploaded_file($_FILES['ffoto']['tmp_name'], $cfile) ){
				$crefile= $cfile ; 
			}else{
				if($cerror !== "") $cerror .= "<br />" ; 
				$cerror .= "Gagal mengupload foto" ;	
			}
		}

		if($cerror == ""){
			header("location: ./7.0.upload.data.php?cnama=" . $cnama . "&crefile=" . $crefile ) ; 
		}else{ 
			header("location: ./7.0.upload.data.php?error=" . $cerror ) ; 
		}

	}
?>
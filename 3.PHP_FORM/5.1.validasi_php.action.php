<?php
	if(isset($_POST['btnsimpan'])){
		/*
			jika terdapat data dalam variable global POST dengan name btnsimpan 
			btnsimpan yang terdapat di form
		*/
		$cerror 	= "" ; 
		$cnama 		= isset($_POST['cnama']) ? $_POST['cnama'] : "" ; //mengambil data dengan name cnama menggunakan if 1 baris
		$cemail 	= isset($_POST['cemail']) ? $_POST['cemail'] : "" ;
		if($cnama == "" || strlen($cnama) < 5){
			/*Jika nama kosong / jika nama kurang dari 5 huruf*/
			$cerror .= "Nama harus lebih dari 4 huruf" ; // .= merupakan pointer yang digunakn untuk melanjutkan isi dari variable sebelumnya
		}
		if($cemail == "" || !filter_var($cemail, FILTER_VALIDATE_EMAIL) ){
			/*Jika nama kosong / jika bukan email*/
			if($cerror !== "") $cerror .= "<br />" ; 
			$cerror .= "Masukkan email dengan benar" ;	
		}

		if(trim($cerror) == ""){
			$optgender	= isset($_POST['optgender']) ? $_POST['optgender'] : "L" ;
			$cgender 	= "Pria" ; 
			if($optgender == "P"){
				$cgender= "Wanita" ; 
			}
			echo "Nama Anda : " . $cnama . "<br />" ; 
			echo "Email Anda : " . $cemail . "<br />" ; 
			echo "Jenis Kelamin : " . $cgender . "<br />" ; 
			echo '<hr />
					<a href="./5.0.validasi_php.data.php">Kembali ke Form POST</a>' ;
		}else{
			header("location: ./5.0.validasi_php.data.php?error=" . $cerror ) ; 
		}
	}
?>
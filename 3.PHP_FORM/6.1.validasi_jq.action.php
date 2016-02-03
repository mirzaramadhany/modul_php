<?php
	if(isset($_POST['btnsimpan'])){
		/*
			jika terdapat data dalam variable global POST dengan name btnsimpan 
			btnsimpan yang terdapat di form
		*/
		$cnama 		= isset($_POST['cnama']) ? $_POST['cnama'] : "" ; //mengambil data dengan name cnama menggunakan if 1 baris
		$cemail 	= isset($_POST['cemail']) ? $_POST['cemail'] : "" ;
		$optgender	= isset($_POST['optgender']) ? $_POST['optgender'] : "L" ;
		$cgender 	= "Pria" ; 
		if($optgender == "P"){
			$cgender= "Wanita" ;
		}

		echo "Nama Anda : " . $cnama . "<br />" ; 
		echo "Email Anda : " . $cemail . "<br />" ; 
		echo "Jenis Kelamin : " . $cgender . "<br />" ; 
	}
?>
<hr />
<a href="./6.0.validasi_jq.data.php">Kembali ke Form POST</a>
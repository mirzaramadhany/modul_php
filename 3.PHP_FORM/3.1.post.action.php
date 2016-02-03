<?php
	if(isset($_POST['btnsimpan'])){
		/*
			jika terdapat data dalam variable global POST dengan name btnsimpan 
			btnsimpan yang terdapat di form
		*/
		$cnama 		= isset($_POST['cnama']) ? $_POST['cnama'] : "" ; //mengambil data dengan name cnama menggunakan if 1 baris
		$cemail 	= isset($_POST['cemail']) ? $_POST['cemail'] : "" ;
		$calamat 	= isset($_POST['calamat']) ? $_POST['calamat'] : "" ;
		$optgender	= isset($_POST['optgender']) ? $_POST['optgender'] : "L" ;
		$cgender 	= "Pria" ; 
		if($optgender == "P"){
			$cgender= "Wanita" ;
		}
		$ckhobi 	= isset($_POST['ckhobi']) ? $_POST['ckhobi'] : array("Lainnya") ;

		echo "<h3>Hasil</h3>" ; 
		echo "Nama Anda : " . $cnama . "<br />" ; 
		echo "Email Anda : " . $cemail . "<br />" ; 
		echo "Alamat : " . $calamat . "<br />" ; 
		echo "Jenis Kelamin : " . $cgender . "<br />" ; 
		echo "Hobi : <br />" ;
		foreach ($ckhobi as $key => $value) {
			echo " - " . $value . "<br />" ; 
		} 
	}
?> 
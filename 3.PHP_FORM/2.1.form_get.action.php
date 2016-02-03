<?php
	if(isset($_GET['btnsimpan'])){
		/*
			jika terdapat data dalam variable global POST dengan name btnsimpan 
			btnsimpan yang terdapat di form
		*/
		$cnama 		= isset($_GET['cnama']) ? $_GET['cnama'] : "" ; //mengambil data dengan name cnama menggunakan if 1 baris
		$calamat 	= isset($_GET['calamat']) ? $_GET['calamat'] : "" ;
		$canakke 	= isset($_GET['canakke']) ? $_GET['canakke'] : "" ;

		echo "Nama Anda : " . $cnama . "<br />" ; 
		echo "Alamat Anda : " . $calamat . "<br />" ; 
		echo "Anak ke-" . $canakke . "<br />" ; 
	} 
?>
<hr />
<a href="./2.0.form_get.data.php">Kembali ke Form GET</a>
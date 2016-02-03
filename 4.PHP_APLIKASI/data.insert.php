<?php 
	$cname 			= "" ; 
	$caddress 		= "" ;
	$cerror 		= "" ;  
	if(isset($_POST['btnsimpan'])){
		$cname 		= isset($_POST['cname']) ? $_POST['cname'] : "" ; //mengambil data dengan name cname menggunakan if 1 baris
		$caddress 	= isset($_POST['caddress']) ? $_POST['caddress'] : "" ;
		if($cname == "" || strlen($cname) < 5){
			/*Jika nama kosong / jika nama kurang dari 5 huruf*/
			$cerror .= "Nama harus lebih dari 4 huruf" ; // .= merupakan pointer yang digunakn untuk melanjutkan isi dari variable sebelumnya
		}
		if(trim($caddress) == ""){
			/*Jika alamat kosong*/
			if($cerror !== "") $cerror .= "<br />" ; 
			$cerror .= "Alamat kosong" ; 
		}

		if($cerror !== ""){
			echo '<div class="alert alert-danger" role="alert">'.$cerror.'</div>' ;
		}else{
			//simpan data ke database 
			$csql 		= "INSERT INTO address_book (name,address) VALUES ('$cname','$caddress')" ; 
			$mydb->execute_sql($csql) ;
			header("location: index.php?cmessage=Data Berhasil Disimpan")  ; //kembali ke halaman data.view
		}
	} 
?>
<form method="POST" action="">
	<div class="form-group">
	    <label for="cname">Nama</label>
	    <input type="text" class="form-control" name="cname" id="cname" 
	    placeholder="Nama" required autofocus value="<?=$cname?>">
	</div> 
	<div class="form-group">
	    <label for="caddress">Alamat</label>
	    <textarea class="form-control" name="caddress" id="caddress" rows="3"><?=$caddress?></textarea>
	</div>
	<button class="btn btn-primary pull-right" type="submit" name="btnsimpan" id="btnsimpan">Simpan</button>
</form>
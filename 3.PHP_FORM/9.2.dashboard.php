<?php 
	session_start() ; //mengaktifkan session digunakan untuk menyimpan data login
	if( isset($_COOKIE['username']) ){
		$_SESSION['username']	= $_COOKIE['username'] ; 
		$lvalid	= true ;
	}
	$cusername	= (isset($_SESSION['username'])) ? $_SESSION['username'] : "" ;//mengambil pada session
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body style="background:#fafafa;">
	<div class="container" style="background:#fff;border-radius:5px;margin-top:1em;text-align:center">
	<?php 
	if($cusername !== ""){
	?>
		<h1>Selamat Datang, <?=$cusername?></h1>
		<p>
			<a href="./9.3.logout.php">Logout</a>
		</p>
	<?php
	}else{
	?>
		<h3>Maaf Anda tidak diizinkan mengakses halaman dashboard silahkan <a href="./9.0.login.php">login</a> kembali</h3>
	<?php
	}
	?>
	</div>
	
	<!-- link js -->
	<script type="text/javascript" src="./bootstrap/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
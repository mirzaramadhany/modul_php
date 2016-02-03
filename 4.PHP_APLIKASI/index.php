<?php 
	require_once './koneksi.php' ; //memanggil / menghubungkan koneksi.php
	$cpage 	= isset($_GET['cpage']) ? $_GET['cpage'] : "data.view" ; //definisikan page memalui get
	$cpage .= ".php" ; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP - MySQL</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body style="background-color:#f5f8fa">

	<div class="container" style="margin-top:2em;background-color:#fff;border-radius:2px;border-color:#d3e0e9;padding-top:10px;padding-bottom:10px">
	<?php 
		if(isset($_GET['cmessage'])){
			echo '<div class="alert alert-info" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$_GET['cmessage'].'
				  </div>' ;
		}
		if(is_file($cpage)){
			require_once $cpage ; 
		}
	?>
	</div>
	<!-- link js -->
	<script type="text/javascript" src="./bootstrap/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
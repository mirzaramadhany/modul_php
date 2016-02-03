<?php 
	$cnama 		= isset($_GET['cnama']) ? $_GET['cnama'] : "" ; //mengambil data dengan name cnama menggunakan if 1 baris
	$crefile	= isset($_GET['crefile']) ? $_GET['crefile'] : "" ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Gambar</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-4" style="border:1px solid #eaeaea;margin-top:1em;padding:1em 2em">
			<?php 
			if(isset($_GET['error'])){
				echo '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>' ;
			}
			?>	
				<form method="POST" action="./7.1.upload.action.php" enctype="multipart/form-data">
					<div class="form-group">
					    <label for="cnama">Nama</label>
					    <input type="text" class="form-control" name="cnama" id="cnama" 
					    placeholder="Nama Anda" required autofocus value="<?=$cnama?>">
					</div>
					<div class="form-group">
						<label for="ffoto">Foto</label>
						<input type="file" name="ffoto" id="ffoto" accept="image/*">
					</div>
					<?php 
					if($crefile !== ""){
						echo '<img src="'.$crefile.'" class="img-responsive" style="height:300px"/><hr />' ; 
					} 
					?>
					<button class="btn btn-primary pull-right" type="submit" name="btnsimpan" id="btnsimpan">Simpan</button>
				</form>
			</div>
		</div>
	</div>
	
	<!-- link js -->
	<script type="text/javascript" src="./bootstrap/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
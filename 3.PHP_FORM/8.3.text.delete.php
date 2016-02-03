<!DOCTYPE html>
<html>
<head>
	<title>Menagement File Edit</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
			        <li>
			        	<a href="./8.0.text.create.php">Membuat File</a>
			        </li>
			        <li>
			        	<a href="./8.1.text.edit.php">Mengedit File</a>
			        </li>
			        <li class="active">
			        	<a href="./8.2.text.read.php">Membaca File</a>
			        </li>
			        <li>
			        	<a href="./8.3.text.delete.php">Menghapus File</a>
			        </li>
			    </ul>
			</div>
		</div>
	</nav>

	<div class="container" style="margin-top:5em ;">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-1" style="border:1px solid #eaeaea;margin-top:1em;padding:1em 2em">
				<form method="POST" action="">
					<div class="form-group">
					    <label for="cnamefile">Nama File</label>
					    <input type="text" class="form-control" name="cnamefile" id="cnamefile" 
					    placeholder="Nama File" required autofocus>
					</div> 
					<button class="btn btn-primary pull-right" type="submit" name="btnhapus" id="btnhapus">Hapus File</button>
				</form>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
			<?php 
				if(isset($_POST['btnhapus'])){ /*membaca file*/
					$cdir 		= "./8.upload/" ;
					$cnamefile	= isset($_POST['cnamefile']) ? $_POST['cnamefile'] : time() ; /*jika tidak memiliki nama diberi waktu*/ 
					$cnamefile .= ".txt" ; 
					if(unlink($cdir . $cnamefile)){
						echo "File ".$cnamefile." berhasil dihapus" ; 
					}else{
						echo "File ".$cnamefile." tidak ditemukan" ; 
					}
				}
			?>
			</div>
		</div>
	</div>
	
	<!-- link js -->
	<script type="text/javascript" src="./bootstrap/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
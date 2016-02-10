<!DOCTYPE html>
<html>
<head>
	<title>Menagement File Create</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
			        <li class="active">
			        	<a href="./8.0.text.create.php">Membuat File</a>
			        </li>
			        <li>
			        	<a href="./8.1.text.edit.php">Mengedit File</a>
			        </li>
			        <li>
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
			<?php /*action php membuat file*/
				if(isset($_POST['btncreate'])){
					$cdir 		= "./8.upload/" ;
					$cisi		= isset($_POST['cisi']) ? $_POST['cisi'] : "" ; 
					$cisi 		= $cisi !== "" ? $cisi : "Kosong" ; 
					/*jika tidak memiliki nama diberi waktu*/
					$cnamefile	= isset($_POST['cnamefile']) ? $_POST['cnamefile'] : time() ; 
					$cnamefile .= ".txt" ; 
					//jika file tidak ditemukan maka akan membuat file
					$objfile 	= fopen($cdir. $cnamefile, "w") or die("Tidak dapat membuat file") ; 
					fwrite($objfile, $cisi) ; 
					fclose($objfile) ; 
				}
			?>
				<form method="POST" action="">
					<div class="form-group">
					    <label for="cnamefile">Nama File</label>
					    <input type="text" class="form-control" name="cnamefile" id="cnamefile" 
					    placeholder="Nama File" required autofocus>
					</div>
					<div class="form-group">
					    <label for="cisi">Isi File</label>
					    <textarea class="form-control" name="cisi" id="cisi" rows="3"></textarea>
					</div>
					<button class="btn btn-primary pull-right" type="submit" name="btncreate" 
					id="btncreate">Buat File</button>
				</form>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
			<?php 
				if(isset($_POST['btncreate'])){ /*membaca file*/
					$objfile	= fopen($cdir. $cnamefile, "r") or die("Tidak dapat membaca file") ; 
					$vadata		= fread($objfile, filesize($cdir. $cnamefile) ) ; 
					fclose($objfile) ; 
					echo "<h3>Membaca file - ".$cnamefile."</h3>" ; 
					echo nl2br($vadata) ; 
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
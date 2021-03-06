<!DOCTYPE html>
<html>
<head>
	<title>Form input data dengan metode POST dan ACTION berada di file berbeda</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-3" style="border:1px solid #eaeaea;margin-top:1em;padding:1em 2em">
				<form method="POST" action="">
					<div class="form-group">
					    <label for="cnama">Nama</label>
					    <input type="text" class="form-control" name="cnama" id="cnama" placeholder="Nama Anda" required autofocus>
					</div>
					<div class="form-group">
					    <label for="cemail">Email</label>
					    <input type="text" class="form-control" name="cemail" id="cemail" required placeholder="Email Anda">
					</div>
					<div class="form-group">
					    <label for="calamat">Alamat</label>
					    <textarea class="form-control" name="calamat" id="calamat" rows="3"></textarea>
					</div>
					<label>Jenis Kelamin</label>
					<div class="form-group">
						<label class="radio-inline">
							<input type="radio" name="optgender" id="optgenderL" value="L" checked=""> Pria
						</label>
						<label class="radio-inline">
							<input type="radio" name="optgender" id="optgenderP" value="P"> Wanita
						</label>
					</div>
					<div class="form-group">
						<label>Hobi</label>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="Membaca" name="ckhobi[]"> Membaca
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="Olahraga" name="ckhobi[]"> Olahraga
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="Memasak" name="ckhobi[]"> Memasak
							</label>
						</div>
					</div>
					<button class="btn btn-primary pull-right" type="submit" name="btnsimpan" id="btnsimpan">Simpan</button>
				</form>
			</div>
			<div class="col-sm-2 col-sm-offset-1">
			<?php 
				require_once "./3.1.post.action.php" ;
			?>
			</div>
		</div>
	</div>
	
	<!-- link js -->
	<script type="text/javascript" src="./bootstrap/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
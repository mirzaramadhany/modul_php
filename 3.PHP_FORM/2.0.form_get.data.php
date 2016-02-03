<!DOCTYPE html>
<html>
<head>
	<title>Form input data dengan metode POST dan ACTION berada di file berbeda</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-4" style="border:1px solid #eaeaea;margin-top:1em;padding:1em 2em">
				<form method="GET" action="./2.1.form_get.action.php">
					<div class="form-group">
					    <label for="cnama">Nama</label>
					    <input type="text" class="form-control" name="cnama" id="cnama" placeholder="Nama Anda" required autofocus>
					</div>
					<div class="form-group">
					    <label for="calamat">Alamat</label>
					    <textarea class="form-control" name="calamat" id="calamat" rows="3"></textarea>
					</div>
					<div class="form-group">
					    <label for="canakke">Anak ke-</label>
					    <select class="form-control" name="canakke" id="canakke">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					
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
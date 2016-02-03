<?php 
	$cnama 		= isset($_POST['cnama']) ? $_POST['cnama'] : "" ; //mengambil data dengan name cnama menggunakan if 1 baris
	$cemail 	= isset($_POST['cemail']) ? $_POST['cemail'] : "" ;
	$calamat 	= isset($_POST['calamat']) ? $_POST['calamat'] : "" ;
	$optgender	= isset($_POST['optgender']) ? $_POST['optgender'] : "L" ;
	$optgenderL	= 'checked="true"' ; 
	$optgenderP	= '' ; 
	if($optgender == "P"){
		$optgenderL	= '' ; 
		$optgenderP	= 'checked="true"' ; 
	}
	$ckhobi 	= isset($_POST['ckhobi']) ? $_POST['ckhobi'] : array("") ;
	$vahobi		= array('','','') ; //array ke 1 2 dan 3
	foreach ($ckhobi as $key => $value) {
		if($value == "Membaca"){
			$vahobi[0]	= 'checked="true"' ; 
		}
		if($value == "Olahraga"){
			$vahobi[1]	= 'checked="true"' ; 
		}
		if($value == "Memasak"){
			$vahobi[2]	= 'checked="true"' ; 
		}
	}
?>
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
					    <input type="text" class="form-control" name="cnama" id="cnama" 
					    placeholder="Nama Anda" required autofocus value="<?=$cnama?>">
					</div>
					<div class="form-group">
					    <label for="cemail">Email</label>
					    <input type="text" class="form-control" name="cemail" id="cemail" 
					    required placeholder="Email Anda" value="<?=$cemail?>">
					</div>
					<div class="form-group">
					    <label for="calamat">Alamat</label>
					    <textarea class="form-control" name="calamat" id="calamat" rows="3"><?=$calamat?></textarea>
					</div>
					<label>Jenis Kelamin</label>
					<div class="form-group">
						<label class="radio-inline">
							<input type="radio" name="optgender" id="optgenderL" value="L" <?=$optgenderL?> > Pria
						</label>
						<label class="radio-inline">
							<input type="radio" name="optgender" id="optgenderP" value="P" <?=$optgenderP?>> Wanita
						</label>
					</div>
					<div class="form-group">
						<label>Hobi</label>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="Membaca" name="ckhobi[]" <?=$vahobi[0]?> > Membaca
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="Olahraga" name="ckhobi[]" <?=$vahobi[1]?>> Olahraga
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" value="Memasak" name="ckhobi[]" <?=$vahobi[2]?>> Memasak
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
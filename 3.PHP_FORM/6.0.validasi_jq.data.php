<!DOCTYPE html>
<html>
<head>
	<title>Validasi Jquery</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-4" style="border:1px solid #eaeaea;margin-top:1em;padding:1em 2em"> 
				<form method="POST" action="./6.1.validasi_jq.action.php">
					<div class="form-group"> 
					    <label for="cnama">Nama</label>
					    <input type="text" class="form-control" name="cnama" id="cnama" 
					    placeholder="Nama Anda" required autofocus>
					</div>
					<div class="form-group">
					    <label for="cemail">Email</label>
					    <input type="text" class="form-control" name="cemail" id="cemail" 
					    required placeholder="Email Anda">
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
					<button class="btn btn-primary pull-right" type="submit" 
					name="btnsimpan" id="btnsimpan">Simpan</button>
				</form>
			</div>
		</div>
	</div>
	
	<!-- link js -->
	<script type="text/javascript" src="./bootstrap/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function(){ 
			$("#btnsimpan").click(function(e){
				var cerror	= "" ; 
				if($("#cnama").val().length < 5){
					cerror	+= "Nama harus lebih dari 4 huruf" ; 
				}
				if($("#cemail").val().length == 0 || $("#cemail").val().indexOf("@") < 0 ){
					if(cerror !== "") cerror	+= '\n' ; 
					cerror += "Masukkan email dengan benar" ; 
				}

				if(cerror !== ""){
					e.preventDefault() ; 
					alert( cerror ) ;  
				}
			}) ; 
		}) ; 
	</script>
</body>
</html>
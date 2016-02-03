<?php 
	session_start() ; 
	$lvalid 	= false ; 
	if( isset($_SESSION['username']) ) $lvalid	= true ;
	if( isset($_COOKIE['username']) ){
		$_SESSION['username']	= $_COOKIE['username'] ; 
		$lvalid	= true ;
	}
	if($lvalid){
		header("location: ./9.2.dashboard.php") ; 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
				<form method="POST" action="./9.1.login.action.php">
					<div class="form-group">
					    <label for="cnama">User Name</label>
					    <input type="text" class="form-control" name="cusername" id="cusername" placeholder="Username" required autofocus>
					</div>
					<div class="form-group">
					    <label for="cpassword">Password</label>
					    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password" required>
					</div>
					<label>
						<input type="checkbox" name="ckremember" > Ingat saya
					</label>
					<hr />
					<button class="btn btn-primary pull-right" type="submit" name="btnlogin" id="btnlogin">Login</button>
				</form>
			</div>
		</div>
	</div>
	
	<!-- link js -->
	<script type="text/javascript" src="./bootstrap/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
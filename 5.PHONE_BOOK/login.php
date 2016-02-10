<?php 
require_once './connection/connection.php' ; 
if(isset($_POST['btnlogin'])){
	$cuser 		= isset($_POST['cuser']) ? $_POST['cuser'] : "" ; 
	$cpassword	= isset($_POST['cpassword']) ? $_POST['cpassword'] : "" ; 
	$cpassword 	= md5($cpassword) ; //encryption standart password
	
	//cek pada database
	$csql 		= "SELECT user,fullname,lv,pic FROM username 
					WHERE user = '$cuser' AND password = '$cpassword'" ; 
	$dbdata 	= $mydb->execute_sql($csql) ; 
	if($dbrow	= $mydb->getrow($dbdata)){
		$_SESSION['user']		= $dbrow['user'] ; 
		$_SESSION['fullname']	= $dbrow['fullname'] ; 
		$_SESSION['lv']			= $dbrow['lv'] ; 
		$_SESSION['pic']		= $dbrow['pic'] !== "" ? $dbrow['pic'] : "./image/no_pic.png" ; 

		if(isset($_POST['ckremember'])){//aktifkan cookies
			setcookie("user", $dbrow['user'] , time() + 86400 , "/"); // 86400 = 1 day
			setcookie("fullname", $dbrow['fullname'] , time() + 86400 , "/");
			setcookie("lv", $dbrow['lv'] , time() + 86400 , "/");
			setcookie("pic", $dbrow['pic'] , time() + 86400 , "/");
		} 
		header('location: ./index.php') ; 
	}else{
		$cerror 	= "User and Password invalid" ; 
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body style="background-color:#f5f8fa">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-4" style="border:1px solid #eaeaea;
			margin-top:5em;padding:1em 2em;background-color:#fff;">
				<?php 
				if(isset($cerror)){
					echo '<div class="alert alert-danger" role="alert">'.$cerror.'</div>' ;
				}
				?>
				<form method="POST" action="">
					<div class="form-group">
					    <label for="cuser">User Name</label>
					    <input type="text" class="form-control" name="cuser" id="cuser" 
					    placeholder="Username" required autofocus>
					</div>
					<div class="form-group">
					    <label for="cpassword">Password</label>
					    <input type="password" class="form-control" name="cpassword" 
					    id="cpassword" placeholder="Password" required>
					</div>
					<label>
						<input type="checkbox" name="ckremember" > Remember me
					</label>
					<hr />
					<button class="btn btn-primary pull-right" type="submit"
					 name="btnlogin" id="btnlogin">Login</button>
				</form>
			</div>
		</div>
	</div>
	
	<!-- link js -->
	<script type="text/javascript" src="./bootstrap/jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
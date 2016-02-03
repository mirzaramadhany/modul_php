<?php 
require_once './connection/connection.php' ; 
if( isset($_COOKIE['user']) ){
	$_SESSION['user']		= $_COOKIE['user'] ;  
	$_SESSION['fullname']	= $_COOKIE['fullname'] ;  
	$_SESSION['lv']			= $_COOKIE['lv'] ;  
	$_SESSION['pic']		= $_COOKIE['pic'] ;  
}

if(!isset($_SESSION['user'])){//jika tidak ada session
	header("location: ./login.php") ; 
}else{
	$cpage 	= isset($_GET['cpage']) ? $_GET['cpage'] : "dashboard/view" ; 
	$cpage  = "./pages/" .$cpage . ".php" ;  
	$vanav	= array("","",""); 
	if( strpos($cpage, "dashboard/") > -1 ) $vanav[0]	= 'class="active"' ; 
	if( strpos($cpage, "pb/") > -1 ) $vanav[1]	= 'class="active"' ; 
	if( strpos($cpage, "user/") > -1 ) $vanav[2]	= 'class="active"' ; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP PHONE BOOK</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css"> <!-- link css -->
</head>
<body style="background-color:#f5f8fa">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
		     	<a class="navbar-brand" href="#">
		        	Phone Book
		      	</a>
		    </div>
			<div class="collapse navbar-collapse">
			    <ul class="nav navbar-nav">
			        <li <?=$vanav[0]?>>
			        	<a href="./index.php">Dashboard</a>
			        </li>
			        <li <?=$vanav[1]?>>
			        	<a href="./index.php?cpage=pb/view">Phone Book</a>
			        </li>
			        <?php if($_SESSION['lv'] == "full"){ ?>
			        <li <?=$vanav[2]?>>
			        	<a href="./index.php?cpage=user/view">User Name</a> 
			        </li>
			        <?php } ?>
			    </ul>
			    <ul class="nav navbar-nav navbar-right"> 
			        <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
				        role="button" aria-haspopup="true" aria-expanded="false">
				        	Hallo, <?=$_SESSION['fullname']?> <span class="caret"></span>
				        </a>
			          	<ul class="dropdown-menu">
			            	<li><a href="./index.php?cpage=profile/update">Edit Profile</a></li>
			            	<li><a href="./index.php?cpage=logout">Logout</a></li>
			            </ul>
			        </li>
			    </ul>
			</div>
		</div>
	</nav>

	<div class="container" style="margin-top:5em;background-color:#fff;border-radius:2px;
	border-color:#d3e0e9;padding-top:10px;padding-bottom:10px">
	<?php 
		if(isset($_GET['cmessage'])){
			echo '<div class="alert alert-info" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
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
<?php
}
?>
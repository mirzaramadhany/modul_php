<div class="row">
	<div class="col-sm-9">
		<h2>Welcome on "Phone Book Application"</h2>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4" 
				style="border-radius:5px; border:1px solid #eaeaea;text-align:center;margin-top:2em">
				<h4>Phone Book Count</h4>
				<h1>
				<?php 
					$csql 	= "SELECT * FROM phone_book" ;
					$dbdata	= $mydb->execute_sql($csql) ; 
					echo $mydb->rows($dbdata) ; 
				?>
				</h1>
				<a href="./index.php?cpage=pb/view">View All</a>
			</div>
		</div>
	</div>
	<div class="col-sm-3" style="border-left:1px solid #eaeaea;text-align:center">
		<h4>Hallo, <?=$_SESSION['fullname']?></h4>
		<center>
			<img src="<?=$_SESSION['pic']?>" class="img-responsive">
		</center>
		<a href="./index.php?cpage=profile/update">Edit Profile</a><br />
		<a href="./index.php?cpage=logout">Logout</a>
	</div>
</div>
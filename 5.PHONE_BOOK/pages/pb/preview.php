<?php 
	$cid  		= isset($_GET['cid']) ? $_GET['cid'] : "" ; 
	$csql 		= "SELECT * FROM phone_book WHERE id = '$cid'" ; 
	$dbdata		= $mydb->execute_sql($csql) ; 
	if($dbrow	= $mydb->getrow($dbdata)){
		$cimg 	= $dbrow['pic'] !== "" ? $dbrow['pic'] : "./image/no_pic.png" ; 
?>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-2">
			<table class="table table-hover">
				<tr>
					<td width="20%">First Name</td>
					<td width="2%" align="center">:</td>
					<td width="78%"><?=$dbrow['first_name']?></td>
				</tr>
				<tr>
					<td width="20%">Last Name</td>
					<td width="2%" align="center">:</td>
					<td width="78%"><?=$dbrow['last_name'] ?></td>
				</tr>
				<tr>
					<td width="20%">Address</td>
					<td width="2%" align="center">:</td>
					<td width="78%"><?= nl2br($dbrow['address']) ?></td>
				</tr>
				<tr>
					<td width="20%">Email</td>
					<td width="2%" align="center">:</td>
					<td width="78%"><?=$dbrow['email'] ?></td>
				</tr>
				<tr>
					<td width="20%">Phone</td>
					<td width="2%" align="center">:</td>
					<td width="78%"><?=$dbrow['phone'] ?></td>
				</tr>
				<tr>
					<td width="20%">Company</td>
					<td width="2%" align="center">:</td>
					<td width="78%"><?=$dbrow['company'] . " / " . $dbrow['position'] ?></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-2" style="border-left:1px solid #eaeaea;">
			<img src="<?=$cimg?>" class="img-responsive">
		</div>
	</div>
	<center>
		<a href="./index.php?cpage=pb/view" class="btn btn-primary">Back</a>
	</center>
<?php
	}
?>
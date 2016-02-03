<?php 
$cid  			= isset($_GET['cid']) ? $_GET['cid'] : "" ; 
$csql 			= "SELECT * FROM phone_book WHERE id = '$cid'";  
$dbdata 		= $mydb->execute_sql($csql) ;  
if($dbrow 		= $mydb->getrow($dbdata)){
	$cfirst_name	= $dbrow['first_name'] ; 
	$clast_name 	= $dbrow['last_name'] ; 
	$caddress 		= $dbrow['address'] ; 
	$cemail 		= $dbrow['email'] ; 
	$cphone 		= $dbrow['phone'] ; 
	$ccompany		= $dbrow['company'] ; 
	$cposition		= $dbrow['position'] ; 

	require_once 'update.action.php' ; 
?>
<h4>Update Data</h4>
<form method="POST" action="" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
			    <label for="cfirst_name">First Name</label>
			    <input type="text" class="form-control" name="cfirst_name" id="cfirst_name" 
			    placeholder="First Name" required autofocus value="<?=$cfirst_name?>"> 
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
			    <label for="clast_name">Last Name</label>
			    <input type="text" class="form-control" name="clast_name" id="clast_name" 
			    placeholder="First Name" required value="<?=$clast_name?>">
			</div>
		</div>
		<div class="col-sm-12">
			<div class="form-group">
			    <label for="caddress">Address</label>
			    <textarea class="form-control" name="caddress" id="caddress" 
			    rows="3"><?=$caddress?></textarea>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
			    <label for="cemail">Email</label>
			    <input type="email" class="form-control" name="cemail" id="cemail" 
			    placeholder="Email" required value="<?=$cemail?>">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
			    <label for="cphone">Phone</label>
			    <input type="text" class="form-control" name="cphone" id="cphone" 
			    placeholder="Phone" required value="<?=$cphone?>">
			</div>
		</div>
		<div class="col-sm-8">
			<div class="form-group">
			    <label for="ccompany">Company</label>
			    <input type="text" class="form-control" name="ccompany" id="ccompany" 
			    placeholder="Company" value="<?=$ccompany?>">
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
			    <label for="cposition">Positon</label>
			    <input type="text" class="form-control" name="cposition" id="cposition" 
			    placeholder="Position" value="<?=$cposition?>">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="fpic">Picture</label>
		    	<input type="file" class="form-control" name="fpic" id="fpic" accept="image/*" > 	
			</div>	
		</div>
	</div>
	
	<button class="btn btn-primary pull-right" type="submit" name="btnsave" id="btnsave">Save</button>
</form>
<?php 
}
?>
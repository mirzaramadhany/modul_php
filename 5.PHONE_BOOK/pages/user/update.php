<?php 
$cuser  			= isset($_GET['cuser']) ? $_GET['cuser'] : "" ; 
$csql 			= "SELECT * FROM username WHERE user = '$cuser'";  
$dbdata 		= $mydb->execute_sql($csql) ; 
if($dbrow 		= $mydb->getrow($dbdata)){
	$cuser 			= $dbrow['user'] ; 
	$cfullname 		= $dbrow['fullname'] ;
	$cimg 			= $dbrow['pic'] ; 
	$valv			= array("","","") ; 
	switch ($dbrow['lv']) {
		case 'editor':
			$valv[0]	= 'checked="true"' ; 
		break;
		case 'viewer':
			$valv[1]	= 'checked="true"' ; 
		break;
		case 'full':
			$valv[2]	= 'checked="true"' ; 
		break;
	}
	require_once 'update.action.php' ;
?>
<h4>Update User</h4>
<form method="POST" action="" enctype="multipart/form-data">
	<div class="form-group">
	    <label for="cuser">User</label>
	    <input type="text" class="form-control" name="cuser" id="cuser" 
	    placeholder="Username" required value="<?=$cuser?>" readonly>
	</div> 
	<div class="form-group">
	    <label for="cfullname">FullName</label>
	    <input type="text" class="form-control" name="cfullname" id="cfullname" 
	    placeholder="FullName" required autofocus value="<?=$cfullname?>">
	</div> 
	<div class="row">
		<div class="col-sm-8">
			<div class="form-group">
				<label for="cpassword">Password</label>
		    	<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password"> 
		    	<small>* Fill if you want to change</small>
			</div>	
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="clv">Level</label>
		    	<select name="clv" id="clv" class="form-control">
		    		<option value="editor" <?=$valv[0]?> >Editor</option>
		    		<option value="viewer" <?=$valv[1]?>>Viewer</option>
		    		<option value="full" <?=$valv[2]?>>Full Access</option>
		    	</select>
			</div>		
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="fpic">Picture</label>
		    	<input type="file" class="form-control" name="fpic" id="fpic" accept="image/*" >
		    	<small>* Fill if you want to change</small> 	
			</div>	
		</div>
		<div class="col-sm-12">&nbsp;</div>

		<div class="col-sm-3">
			<img src="<?=$cimg?>" class="img-responsive">
		</div>
		<div class="col-sm-9">
			<button class="btn btn-primary pull-right" type="submit" name="btnsave" id="btnsave">Save</button>	
		</div>
	</div>
</form>
<?php 
}
?>
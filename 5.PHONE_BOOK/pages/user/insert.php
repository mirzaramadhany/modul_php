<?php 
	$cuser 			= "" ; 
	$cfullname 		= "" ;
	
	require_once 'insert.action.php' ;
?>
<h4>New User</h4>
<form method="POST" action="" enctype="multipart/form-data">
	<div class="form-group">
	    <label for="cuser">User</label>
	    <input type="text" class="form-control" name="cuser" id="cuser" 
	    placeholder="Username" required autofocus value="<?=$cuser?>">
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
			</div>	
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="clv">Level</label>
		    	<select name="clv" id="clv" class="form-control">
		    		<option value="editor">Editor</option>
		    		<option value="viewer">Viewer</option>
		    		<option value="full">Full Access</option>
		    	</select>
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
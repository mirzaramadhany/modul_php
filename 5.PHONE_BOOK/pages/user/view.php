<a href="index.php?cpage=user/insert" class="btn btn-primary pull-right">New User</a>
<br />
<br />
<table class="table table-hover table-striped">
	<thead>
		<th width="25%">User</th>
		<th width="55%">FullName</th>
		<th width="15%" style="text-align:center">...</th>
	</thead>
	<tbody>
	<?php 
	$nrow 			= 1 ; 
	$csql 			= "SELECT * FROM username" ; 
	$dbdata 		= $mydb->execute_sql($csql) ; 
	while ($dbrow	= $mydb->getrow($dbdata)) {
		$chtml		= '<tr>' ; 
		$chtml 	   .= '	<td>'.$dbrow['user'].'</td>' ; 
		$chtml 	   .= '	<td>'.$dbrow['fullname'].'</td>' ; 
		$chtml 	   .= ' <td align="center">
							<a href="index.php?cpage=user/update&cuser='.$dbrow['user'].'" class="btn btn-success">Edit</a>
							<a href="index.php?cpage=user/delete&cuser='.$dbrow['user'].'" 
							class="btn btn-danger" onclick="return confirm(\'Delete Data '.$dbrow['user'].' ?\')">
								Delete
							</a>
						</td>' ;  
		$chtml	   .= '</tr>' ; 
		echo $chtml ; 
	}
	?>
	</tbody>
</table>
<?php
if($_SESSION['lv'] !== "viewer"){
?>
<a href="index.php?cpage=pb/insert" class="btn btn-primary pull-right">New Data</a>
<br />
<br />
<?php
}
?>
<table class="table table-hover table-striped">
	<thead>
		<th width="5%" style="text-align:center">#</th>
		<th width="25%">Name</th>
		<th width="50%">Phone</th>
		<th width="20%" style="text-align:center">...</th>
	</thead>
	<tbody>
	<?php 
	$nrow 			= 1 ; 
	$csql 			= "SELECT * FROM phone_book ORDER BY id ASC" ; 
	$dbdata 		= $mydb->execute_sql($csql) ; 
	while ($dbrow	= $mydb->getrow($dbdata)) {
		$chtml		= '<tr>' ; 
		$chtml 	   .= '	<td align="center">'.$nrow++.'</td>' ; 
		$chtml 	   .= '	<td>'.$dbrow['first_name'].' '.$dbrow['last_name'].'</td>' ; 
		$chtml 	   .= '	<td>'.$dbrow['phone'].'</td>' ; 
		$chtml 	   .= ' <td align="center">' ; 
		$chtml 	   .= ' <a href="index.php?cpage=pb/preview&cid='.$dbrow['id'].'" 
							class="btn btn-info">Preview</a>' ; 
		if($_SESSION['lv'] !== "viewer"){
			$chtml .= ' <a href="index.php?cpage=pb/update&cid='.$dbrow['id'].'" 
							class="btn btn-success">Edit</a>' ; 
			$chtml .= ' <a href="index.php?cpage=pb/delete&cid='.$dbrow['id'].'" 
						class="btn btn-danger" onclick="return confirm(\'Delete Data '.
							$dbrow['first_name'].' '.$dbrow['last_name'].' ?\')">
							Delete
						</a>' ; 
		}
		$chtml 	   .= ' </td>' ;  
		$chtml	   .= '</tr>' ;  
		echo $chtml ; 
	}
	?>
	</tbody>
</table>
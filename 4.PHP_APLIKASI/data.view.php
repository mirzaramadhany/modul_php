<a href="index.php?cpage=data.insert" class="btn btn-primary">Tambah Data</a>
<table class="table table-hover table-striped">
	<thead>
		<th width="5%" style="text-align:center">#</th>
		<th width="25%">Name</th>
		<th width="55%">Address</th>
		<th width="15%" style="text-align:center">...</th>
	</thead>
	<tbody>
	<?php 
	$nrow 			= 1 ; 
	$csql 			= "SELECT * FROM address_book" ; 
	$dbdata 		= $mydb->execute_sql($csql) ; 
	while ($dbrow	= $mydb->getrow($dbdata)) {
		$chtml		= '<tr>' ; 
		$chtml 	   .= '	<td align="center">'.$nrow++.'</td>' ; 
		$chtml 	   .= '	<td>'.$dbrow['name'].'</td>' ; 
		$chtml 	   .= '	<td>'.$dbrow['address'].'</td>' ; 
		$chtml 	   .= ' <td align="center">
							<a href="index.php?cpage=data.update&cid='.$dbrow['id'].'" class="btn btn-success">Edit</a>
							<a href="index.php?cpage=data.delete&cid='.$dbrow['id'].'" 
							class="btn btn-danger" onclick="return confirm(\'Hapus Data '.$dbrow['name'].' ?\')">
								Delete
							</a>
						</td>' ; 
		$chtml	   .= '</tr>' ; 
		echo $chtml ; 
	}
	?>
	</tbody>
</table>
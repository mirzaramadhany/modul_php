<?php 
	$cuser  = isset($_GET['cuser']) ? $_GET['cuser'] : "" ; 
	$csql 	= "DELETE FROM username WHERE user = '$cuser'";  
	$mydb->execute_sql($csql) ; 
	header("location: index.php?cpage=user/view&cmessage=Data Deleted")  ; //kembali ke halaman data.view
?>
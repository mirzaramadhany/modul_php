<?php 
	$cid  = isset($_GET['cid']) ? $_GET['cid'] : "" ; 
	$csql 	= "DELETE FROM phone_book WHERE id = '$cid'";  
	$mydb->execute_sql($csql) ; 
	header("location: index.php?cpage=pb/view&cmessage=Data Deleted")  ; //kembali ke halaman data.view
?>
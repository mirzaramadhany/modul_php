<?php 
	$cid  	= isset($_GET['cid']) ? $_GET['cid'] : "" ; 
	$csql 	= "DELETE FROM address_book WHERE id = '$cid'";  
	$mydb->execute_sql($csql) ; 
	header("location: index.php?cmessage=Data Berhasil Dihapus")  ; //kembali ke halaman data.view
?>
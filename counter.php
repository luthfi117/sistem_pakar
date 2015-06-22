<?php
//COUNTER OF MD and MB
	require "connection.php";
	$getdata = mysql_query("SELECT * FROM gejala");
	// while($row = mysql_fetch_array($getdata)) {
	// 	$pembilang = $row['mb'] - $row['md'];
	// 	$penyebut = (1 - min($row['mb'], $row['md']));
	// 	$cf = $pembilang / $penyebut;
	// 	$id = $row['id'];
	// 	mysql_query("UPDATE gejala SET cf='$cf' WHERE id='$id'");

	// }


?>
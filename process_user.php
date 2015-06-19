<?php
	require "connection.php";

	$nama = $_POST['nama'];
	$proses = mysql_query("INSERT INTO user (nama) VALUES ('$nama') ");

	if ($proses) {
		header("location:1.php?name=$nama");
	}else{
		echo "damn you!";
	}
?>
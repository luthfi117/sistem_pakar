<?php
	require "connection.php";

	$nama = $_POST['nama'];
	$lokasi = $_POST['lokasi'];
	$proses = mysql_query("INSERT INTO user (nama, lokasi) VALUES ('$nama', '$lokasi') ");

	if ($proses) {
		header("location:1.php?name="$nama);
	}else{
		echo "damn you!";
	}
?>
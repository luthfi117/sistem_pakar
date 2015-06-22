<?php 
	require "connection.php";

		$first = $_POST['first_select'];
		$second = $_POST['second_select'];
		$third = $_POST['third_select'];
		$fourth = $_POST['fourth_select'];
		$fifth = $_POST['fifth_select'];
		$sixth = $_POST['sixth_select'];
		$seventh = $_POST['seventh_select'];
		$eight = $_POST['eight_select'];
		$nineth = $_POST['nineth_select'];
		$tenth = $_POST['tenth_select'];
		$nama = $_POST['nama'];
		$lokasi = $_POST['lokasi'];

		#UPDATE article SET title='$title',date='$tanggal', content='$konten', approval ='$approval' WHERE id=$id
		$proses = mysql_query("INSERT INTO user (nama, lokasi) VALUES ('$nama', '$lokasi') ");
		$proses = mysql_query("UPDATE user SET g01='$first', g02='$second', g03='$third', g04='$fourth', g05='$fifth', g06='$sixth', g07='$seventh' ,g08='$eight', g09='$nineth', g10='$tenth' WHERE nama='$nama' AND lokasi='$lokasi' ");

		//COUNTER MD-MB

		
?>
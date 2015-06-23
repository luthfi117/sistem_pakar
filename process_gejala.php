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

$satu = $first * -0.25;
$dua = $second * 0.5;
$tiga = $third * -0.5;
$empat = $fourth * -0.714;
$lima = $fifth * 1;
$enam = $sixth * 0.167;
$tujuh = $seventh * 0.583;
$delapan = $eight * 0.43;
$sembilan = $nineth * 0.77;
$sepuluh = $tenth * 0.22;

$hasil = max($satu, $dua, $tiga, $empat, $lima, $enam, $tujuh, $delapan, $sembilan, $sepuluh);


if($hasil == $satu){
	$hasil1 = "Rematik";
}else if($hasil == $dua){
	$hasil1 = "Radang Sendi";
}else if($hasil == $tiga){
	$hasil1 = "Demam Berdarah";
}else if($hasil == $empat){
	$hasil1 = "Malaria";
}else if($hasil == $lima){
	$hasil1 = "Jantung Koroner";
}else if($hasil == $enam){
	$hasil1 = "Flu";
}else if($hasil == $tujuh){
	$hasil1 = "Tumor";
}else if($hasil == $delapan){
	$hasil1 = "Tifus";
}else if($hasil == $sembilan){
	$hasil1 = "Asma";
}else if($hasil == $sepuluh){
	$hasil1 = "Anemia";
}


		// #UPDATE article SET title='$title',date='$tanggal', content='$konten', approval ='$approval' WHERE id=$id
$proses = mysql_query("INSERT INTO user (nama, lokasi) VALUES ('$nama', '$lokasi') ");
$proses = mysql_query("UPDATE user SET g01='$first', g02='$second', g03='$third', g04='$fourth', g05='$fifth', g06='$sixth', g07='$seventh' ,g08='$eight', g09='$nineth', g10='$tenth', hasil='$hasil1' WHERE nama='$nama' AND lokasi='$lokasi' ");

		//COUNTER MD-MB

if ($proses) {
	header('location:2.php?nama='.$nama);
}

?>


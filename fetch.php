	<?php
	require "connection.php";

	$data = array();
	$query = mysql_query("SELECT DISTINCT gejala FROM gejala");
	$idx = 0;
	$jmlh = mysql_num_rows($query);
	while($row = mysql_fetch_array($query)) {
		for($idx; $idx < $jmlh; $idx++);
			array_push($data, $row['gejala']);
	}
	/*
	for($idx = 0; $idx < $jmlh; $idx++) {
	echo $data[$idx];
	echo "<br>";
}*/

$fh = fopen("data.json", 'w') or die("Error opening output file");
fwrite($fh, "var data = '");
fwrite($fh, json_encode($data, JSON_UNESCAPED_UNICODE));
fwrite($fh, "';");
fclose($fh);
?>

<html>
<head>
	<script src="data.json"></script>
	<script>var gejala = JSON.parse(data);</script>
</head>
<body>
</body>
</html>

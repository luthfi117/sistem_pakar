<?php
	include "header.php";
	$P1 = array(g02);
	$P2 = array(g01,g02);
	$P3 = array(g01,g03);
	$P4 = array(g04);
	$P5 = array(g05);
	$P6 = array(g06);
	$P7 = array(g07);
	$P8 = array(g08, g10);
	$P9 = array(g08,g09);
	$P10 = array(g07,g10);
	$getdata = mysql_query("SELECT * FROM gejala");

?>


					

  						
  					
<?php
	include "footer.php";
?>
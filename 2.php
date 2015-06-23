<?php
	include "header.php";
?>

<?php
	$nama = $_GET['nama'];
	$getdata = mysql_query("SELECT * FROM user WHERE nama='$nama'");

					//$fetch = mysql_fetch_array($getdata);
					while($fetch = mysql_fetch_array($getdata)){
					echo "<p class='wow slideInUp'>". $fetch['nama'] ."</p>";
					echo $fetch['hasil'];
						if($fetch['hasil'] == "Malaria"){
							echo "Obatnya : Air, Madu , Kapur Sirih";
						}
					
					
					}

?>


					

  						
  					
<?php
	include "footer.php";
?>
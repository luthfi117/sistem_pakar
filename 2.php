<?php
	include "header.php";
?>

<?php
	$nama = $_GET['nama'];
	$getdata = mysql_query("SELECT * FROM user WHERE nama='$nama'");

					//$fetch = mysql_fetch_array($getdata);
					while($fetch = mysql_fetch_array($getdata)){
					echo "<p class='wow slideInUp' style='font-size:18px;'><b>". $fetch['nama'] ."</b></p>";
					echo "Lokasi : ". "<i>" .$fetch['lokasi'] . "</i><br>";
					echo "Anda di diagnosa menderita penyakit <b><span style='font-size:18px;'>".$fetch['hasil'] . "</span></b> ";
						if($fetch['hasil'] == "Malaria"){
							echo "Anda dianjurkan Minum Herbal Berikut : Air, Madu dan Kapur Sirih";
						}elseif($fetch['hasil'] == "Rematik"){
							echo "Anda dianjurkan Minum Herbal Berikut : Cabai Rawit, Jeruk Nipis dan Kapur Sirih";
						}elseif ($fetch['hasil'] == "Radang Sendi") {
							echo "Anda dianjurkan Minum Herbal Berikut : Nanas, dan Air Putih";
						}elseif ($fetch['hasil'] == "Demam Berdarah") {
							echo "Anda dianjurkan Minum Herbal Berikut : Daun Pepaya muda, Garam dan Air Putih";
						}elseif ($fetch['hasil'] == "Jantung Koroner") {
							echo "Anda dianjurkan Minum Herbal Berikut : Daun Sukun dan Air Putih";						
						}elseif ($fetch['hasil'] == "Flu") {
							echo "Anda dianjurkan Minum Herbal Berikut : Daun Sereh, Jeruk Nipis, Daun Sirih, Biji Cengkeh, Jahe, dan Air Putih";						
						}elseif ($fetch['hasil'] == "Tumor") {
							echo "Anda dianjurkan Minum Herbal Berikut : Pelepah Daun Pepaya Muda, Daun Cermai Muda, Daun Bayam Merah, Daun Belimbing dan Air Putih";
						}elseif ($fetch['hasil'] == "Tifus") {
							echo "Anda dianjurkan Minum Herbal Berikut : Kunyit, Sereh, Daun Sambiroto, dan Air Putih";
						}elseif ($fetch['hasil'] == "Asma") {
							echo "Anda dianjurkan Minum Herbal Berikut : Kencur, Madu, Telur Ayam Kampung, Perasan Jeruk Nipis, dan Air Putih";
						}elseif ($fetch['hasil'] == "Anemia") {
							echo "Anda dianjurkan Minum Herbal Berikut : Kacang Hijau dan Air Putih";
						}else{
							echo "Dari diagnosis yang telah di lakukan, anda dinyatakan Sehat";
						}
					
					
					}

?>


					

  						
  					
<?php
	include "footer.php";
?>
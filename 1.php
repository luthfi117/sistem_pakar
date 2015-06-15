              <?php
                include "header.php";
              ?>

              <?php
              $query = mysql_query("SELECT * FROM gejala where id = 1");
              while($fetch = mysql_fetch_array($query)){
  						echo"<p class='wow slideInUp'>";
  						echo"Apakah anda merasakan ";
              echo $fetch['gejala'];
              echo "? Masukan angka yang menggambarkan tingkat sakit yang di derita";
  						echo"</p>";
              }
              ?>

              
  						<form>
  						<div class="input-group  wow zoomIn" data-wow-delay="1s">
						  <!-- Large button group -->
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							    Pilihan <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
							    <li><a href="#">1</a></li>
							    <li><a href="#">2</a></li>
							    <li><a href="#">3</a></li>
							    <li><a href="#">4</a></li>
							    <li><a href="#">5</a></li>
							    <li><a href="#">6</a></li>
							    <li><a href="#">7</a></li>
							    <li><a href="#">8</a></li>
							    <li><a href="#">9</a></li>
							    <li><a href="#">10</a></li>
							  </ul>
							</div>
						</div>
						<div class="col-md-4 pull-right">
						<input type="submit" class="check-button wow rollIn" value="" data-wow-delay="2s">
						</div>
						</form>

            <?php
              include "footer.php";
            ?>
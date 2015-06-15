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



  						<form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="maxOption2" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="2" data-wow-delay="2s">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>

                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
            </form>
						<div class="col-md-4 pull-right">
						<input type="submit" class="check-button wow rollIn" value="" data-wow-delay="2s">
						</div>


            <?php
              include "footer.php";
            ?>
              <?php
                include "header.php";
                include "fetch.php";
              ?>



              <div class="satu">
              <p class="wow slideInUp">
              Apakah anda merasakan <?php echo $data[0]; ?>? Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan!
              </p>


              <form class="form-horizontal" role="form" method="post" action="process_gejala.php" name="gejala_satu">
              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="first" name="first_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="0.1">0.1 (Sangat Tidak)</option>
                    <option value="0.2">0.2 (Tidak)</option>
                    <option value="0.3">0.3 (Mungkin Tidak)</option>
                    <option value="0.4">0.4 (Mungkin Tidak)</option>
                    <option value="0.5">0.5 (Sedikit)</option>
                    <option value="0.6">0.6 (Jarang Terasa)</option>
                    <option value="0.7">0.7 (Kadang Terasa)</option>
                    <option value="0.8">0.8 (Sering Terasa)</option>
                    <option value="0.9">0.9 (Sangat Terasa)</option>
                    <option value="1.0">1.0 (Sangat amat terasa)</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_satu" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>
            

            <div class="dua">
              <p class="wow slideInUp">
              Apakah anda merasa <?php echo $data[1]; ?>? Masukan angka yang menggambarkan tingkat sakit yang di derita
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="two" name="second_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                  <option value="0.1">0.1 (Sangat Tidak)</option>
                    <option value="0.2">0.2 (Tidak)</option>
                    <option value="0.3">0.3 (Mungkin Tidak)</option>
                    <option value="0.4">0.4 (Mungkin Tidak)</option>
                    <option value="0.5">0.5 (Sedikit)</option>
                    <option value="0.6">0.6 (Jarang Terasa)</option>
                    <option value="0.7">0.7 (Kadang Terasa)</option>
                    <option value="0.8">0.8 (Sering Terasa)</option>
                    <option value="0.9">0.9 (Sangat Terasa)</option>
                    <option value="1.0">1.0 (Sangat amat terasa)</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_dua" value="" data-wow-delay="2s">

            <div class="col-md-4 pull-right">
            </div></div>

            <!-- THIS IS THE THIRD QUESTION -->
             <div class="tiga">
              <p class="wow slideInUp">
              Apakah anda merasa <?php echo $data[2]; ?>? Masukan angka yang menggambarkan tingkat sakit yang di derita
              </p>

              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="third" name="third_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                   <option value="0.1">0.1 (Sangat Tidak)</option>
                    <option value="0.2">0.2 (Tidak)</option>
                    <option value="0.3">0.3 (Mungkin Tidak)</option>
                    <option value="0.4">0.4 (Mungkin Tidak)</option>
                    <option value="0.5">0.5 (Sedikit)</option>
                    <option value="0.6">0.6 (Jarang Terasa)</option>
                    <option value="0.7">0.7 (Kadang Terasa)</option>
                    <option value="0.8">0.8 (Sering Terasa)</option>
                    <option value="0.9">0.9 (Sangat Terasa)</option>
                    <option value="1.0">1.0 (Sangat amat terasa)</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_tiga" value="" data-wow-delay="2s">
            
            <div class="col-md-4 pull-right">
            </div>
            </div>

            <!-- EMPAT -->
            <div class="empat">
              <p class="wow slideInUp">
              Apakah anda merasakan <?php echo $data[3]; ?>? Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan!
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="fourth" name="fourth_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="0.1">0.1 (Sangat Tidak)</option>
                    <option value="0.2">0.2 (Tidak)</option>
                    <option value="0.3">0.3 (Mungkin Tidak)</option>
                    <option value="0.4">0.4 (Mungkin Tidak)</option>
                    <option value="0.5">0.5 (Sedikit)</option>
                    <option value="0.6">0.6 (Jarang Terasa)</option>
                    <option value="0.7">0.7 (Kadang Terasa)</option>
                    <option value="0.8">0.8 (Sering Terasa)</option>
                    <option value="0.9">0.9 (Sangat Terasa)</option>
                    <option value="1.0">1.0 (Sangat amat terasa)</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="submit" class="check-button wow rollIn submit_empat" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>

            </form>

            <?php
              include "footer.php";
            ?>
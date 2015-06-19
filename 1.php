              <?php
                include "header.php";
                include "fetch.php";
              ?>



              <div class="satu">
              <p class="wow slideInUp">
              Apakah anda merasa <?php echo $data[0]; ?>? Masukan angka yang menggambarkan tingkat sakit yang di derita
              </p>


              <form class="form-horizontal" role="form" method="post" action="process_gejala.php" name="gejala_satu">
              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="first" name="first_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
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
              <input type="button" class="check-button wow rollIn submit_satu" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div></div>
            

            <div class="dua">
              <p class="wow slideInUp">
              Apakah anda merasa <?php echo $data[1]; ?>? Masukan angka yang menggambarkan tingkat sakit yang di derita
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="two" name="second_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
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
              <input type="submit" class="check-button wow rollIn submit_tiga" value="" data-wow-delay="2s">
            </form>
            <div class="col-md-4 pull-right">
            </div></div>

            <?php
              include "footer.php";
            ?>
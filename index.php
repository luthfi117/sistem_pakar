              <?php
                include "header.php";
                include "fetch.php";
              ?>

              <form class="form-horizontal" role="form" method="post" action="process_gejala.php" name="gejala_satu">
              <div class="awal">
              <p class="wow slideInUp">
              Momentum stupefy portus sectumsempra lumos. Protego rictusempra reducio protego totalus legilimens mobilicorpus. Rictusempra imperturbable aparecium kedavra engorgio. Alohomora leviosa mortis point legilimens quietus babbling stupefy portus?
              </p>
              <div class="input-group  wow zoomIn" data-wow-delay="1s">
              <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-heart"></i></span>
              <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" name="nama" id="nama">
              <input type="text" class="form-control" placeholder="Lokasi" aria-describedby="basic-addon1" name="lokasi" id="lokasi">

              </div>
              <div class="col-md-4 pull-right">
              <input type="button" class="check-button wow rollIn submit_awal" value="" data-wow-delay="2s" >
              </div>
              </div>

              <div class="satu">
              <p class="wow slideInUp">
              Apakah anda merasakan <?php echo $data[0]; ?>? Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan!
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="first" name="first_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
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
              Apakah anda merasakan nyeri sendi pada badan? Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan?
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="two" name="second_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                  <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
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
              Apakah anda merasakan ingin mengeluarkan isi dalam perut anda dalam jangka waktu yang dekat (muntah)?
              </p>

              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="third" name="third_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                   <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
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
              Apakah anda merasakan dehidrasi? Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan?
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="fourth" name="fourth_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_empat" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>
 

            <!-- LIMA -->
            <div class="lima">
              <p class="wow slideInUp">
              Apakah anda merasakan gatal pada tenggorokan?Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan?
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="fifth" name="fifth_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_lima" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>

            <!-- ENAM -->
              <div class="enam">
              <p class="wow slideInUp">
              Apakah anda merasa flu dalam waktu bersamaan?Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan?
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="sixth" name="sixth_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_enam" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>

            <!--TUJUH -->
              <div class="tujuh">
              <p class="wow slideInUp">
              Apakah anda merasa kehilangan nafsu makan di sertai dengan mudah lelah? Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan?
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="seventh" name="seventh_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_tujuh" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>

            <!--DELAPAN-->
              <div class="delapan">
              <p class="wow slideInUp">
              Apakah anda merasa Sakit kepala disertai dengan mual dan muntah? Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan?
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="eight" name="eight_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_delapan" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>

            <!-- SEMBILAN -->
              <div class="sembilan">
              <p class="wow slideInUp">
              Apakah anda merasa berat saat bernafas?Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan?
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="nineth" name="nineth_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="button" class="check-button wow rollIn submit_sembilan" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>

            <!--SEPULUH-->
              <div class="sepuluh">
              <p class="wow slideInUp">
              Apakah anda merasakan mudah lelah disertai dengan sesak nafas dan mual?Silahkan klik option dibawah ini sesuai dengan yang Anda rasakan? 
              </p>


              <div class="form-group">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                  <select id="tenth" name="tenth_select" class="selectpicker show-menu-arrow form-control wow zoomIn" multiple data-max-options="1" data-wow-delay="2s">
                    <option value="-1.0">Sangat Tidak</option>
                    <option value="-0.7">Sepertinya Tidak</option>
                    <option value="-0.4">Mungkin Tidak</option>
                    <option value="0">Tidak Tahu</option>
                    <option value="0.4">Kadang Terasa</option>
                    <option value="0.7">Sering Terasa</option>
                    <option value="1.0">Sangat Terasa</option>
                  </select>
                </div>
                <div class="col-lg-1"></div>
              </div>
              <input type="submit" class="check-button wow rollIn submit_sepuluh" value="" data-wow-delay="1.5s">
            <div class="col-md-4 pull-right">
            </div>
            </div>

            </form>

            <?php
              include "footer.php";
            ?>
    <!-- Pendaftaran Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Pendaftaran ukm</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>

        <div class="col-md-10 col-md-push-1">
            <div class="bs-example">
              <form class="form-horizontal" action="<?= base_url()?>prosesregister" method="post" id="fileForm" role="form">
          <fieldset>

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="Nama">Nama :</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Lengkap" class="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="Nama">Tanggal Lahir :</label>
                        <div class="col-xs-9">
                    <input class="form-control" type="date" name="bday">
                  </div>
              </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Jenis Kelamin :</label>
                        <div class="col-xs-2">
                            <label class="radio-inline">
                            <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                            </label>
                        </div>
                        <div class="col-xs-2">
                            <label class="radio-inline">
                            <input type="radio" name="gender" value="Perempuan"> Perempuan
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="Nama">Nomor Induk Mahasiswa:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Jurusan :</label>
                        <div class="col-xs-3">
                            <label class="radio-inline">
                            <input type="radio" name="jurusan" value="Sistem Informasi"> System Informasi (SI)
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio-inline">
                            <input type="radio" name="jurusan" value="Teknik Informatika"> Teknik Informatika (TI)
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="Alamat">Alamat :</label>
                        <div class="col-xs-9">
                            <textarea rows="3" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat Lengkap"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="inputEmail">Email :</label>
                        <div class="col-xs-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" onchange="email_validate(this.value);" />
                            <div class="status" id="warningemail"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" for="telp">No. Telp:</label>
                        <div class="col-xs-9">
                            <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="Nomor Telepon / Handphone"/>
                        </div>
                     </div>

                     <div class="form-group">
                         <label class="control-label col-xs-3" for="Nama">Username :</label>
                         <div class="col-xs-9">
                             <input type="text" class="form-control" name="username" id="nama" placeholder="Username">
                             <div class="status" id="warning_user_name"></div>
                         </div>
                     </div>

                     <div class="form-group">
                         <label class="control-label col-xs-3" for="inputPassword">Password :</label>
                         <div class="col-xs-9">
                             <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" name="password" id="pass1" placeholder="password">
                         </div>
                     </div>

                     <div class="form-group">
                         <label class="control-label col-xs-3" for="inputPassword">Password Confirm:</label>
                         <div class="col-xs-9">
                             <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter password again"  id="pass2" onkeyup="checkPass(); return false;" />
                             <span id="confirmMessage" class="confirmMessage"></span>
                         </div>
                     </div>

                     <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                        <hr>
                        <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" value="Kirim">
                            <input type="reset" class="btn btn-default" value="Reset">
                        </div>
                    </div>
                  </fieldset>
              </form><!-- ends register form -->
            </div>
        </div>
    </section>


    <script type="text/javascript">
      document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
    </script>

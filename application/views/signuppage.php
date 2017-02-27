        <section id="service">
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
                                <input required="required" type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Lengkap" onkeyup = "Validate(this)"/>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-xs-3" for="Nama">Nomor Induk Mahasiswa:</label>
                          <div class="col-xs-9">
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" maxlength="8" onkeypress="return validasiangka(event)"/>
                            <div class="status" id="warningnim"></div>
                          </div>
                          <p id="warningnim"> </p>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" for="Nama">Tanggal Lahir :</label>
                            <div class="col-xs-9">
                                <input required="required" class="form-control" type="date" name="bday">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Jenis Kelamin :</label>
                            <div class="col-xs-2">
                                <label class="radio-inline">
                                <input required="required" type="radio" name="gender" value="Laki-laki"> Laki-laki
                                </label>
                            </div>
                            <div class="col-xs-2">
                                <label class="radio-inline">
                                <input required="required" type="radio" name="gender" value="Perempuan"> Perempuan
                                </label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-xs-3">Jurusan :</label>
                            <div class="col-xs-9">
                              <select class="form-control" name="jurusan" id="jurusan";>
                                  <option value="Sistem Informasi">S1 - Sistem Informasi</option>
                                  <option value="Teknik Informatika">S1 - Teknik Informatika</option>
                                  <option value="Manajemen Informatika"></option>
                                  <option value="Teknik Komputer"></option>
                                  </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" for="Nama">Angkatan :</label>
                            <div class="col-xs-9">
                                <input required="required" type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Angkatan" id="angkatan"  maxlength="4" onkeypress="return validasiangka(event)"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" for="Alamat">Alamat :</label>
                            <div class="col-xs-9">
                                <textarea required="required" rows="3" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat Lengkap"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" for="inputEmail">Email :</label>
                            <div class="col-xs-9">
                                <input required="required" type="email" class="form-control" name="email" id="email" placeholder="Email" onchange="email_validate(this.value);" />
                                <div class="status" id="warningemail"></div>
                            </div>
                            <p id="warningemail"> </p>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" for="telp">No. Telp :</label>
                            <div class="col-xs-9">
                                <input required="required" type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="Nomor Telepon / Handphone"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-offset-3 col-xs-9">
                            <hr>
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">terms and conditions</h3>
                                    </div>
                                    <div class="panel-body">
                                        1. Rajin ikut berpartisipasi dalam setiap unit kegiatan UKM<br>
                                        2. Selalu menjaga ikatan pada sesama anggota UKM<br>
                                        3. Ikut berpartisipasi dalam setiap kegiatan amal<br>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-offset-3 col-xs-9">
                                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the terms and conditions</a> for Registration.</label><span class="req">* </span>
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
            </div>
        </section>

        <script type="text/javascript">
              document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
            </script>

            <script>
            function validasiangka(evt){
                  var charCode = (evt.which) ? evt.which : event.keyCode
                   if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                  return true;
                }
                </script>

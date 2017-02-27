    <!-- Team Section -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Struktur Organisasi</h2>
                    <h3 class="section-heading"></h3>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">

<!-- Upload Ketua ====================================================================================================== -->
                
                <div class="col-sm-4">
                    <div class="team-member">

                        <form role="form" action="<?= base_url()?>admin_struktur_page/update_ketua" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/ketua.jpg">

<!-- Profil Ketua ====================================================================================================== -->

                        <?php foreach($ukm_ketua as $u){ ?>
                        <form action="<?php echo base_url(). 'admin_struktur_page/update_profil_ketua'; ?>" method="post">

                        <div class="col-md-12 col-md-push-0">
                            <div class="bs-example">
                            <fieldset>
                                <br>
                                <div class="form-group">
                                <label class="col-lg-2 control-label">Nama</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jabatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jabatan" class="form-control" value="<?php echo $u->jabatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jurusan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jurusan" class="form-control" value="<?php echo $u->jurusan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Angkatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="angkatan" class="form-control" value="<?php echo $u->angkatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="col-lg-3 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                                </div><br><br><br><br>
                            </fieldset>
                            </div>
                        </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>

<!-- Upload Wakil ===================================================================================================== -->
                
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur_page/update_wakil" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/wakil.jpg">

<!-- Profil Wakil ====================================================================================================== -->

                        <?php foreach($ukm_wakil as $u){ ?>
                        <form action="<?php echo base_url(). 'admin_struktur_page/update_profil_wakil'; ?>" method="post">

                        <div class="col-md-12 col-md-push-0">
                            <div class="bs-example">
                            <fieldset>
                                <br>
                                <div class="form-group">
                                <label class="col-lg-2 control-label">Nama</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jabatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jabatan" class="form-control" value="<?php echo $u->jabatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jurusan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jurusan" class="form-control" value="<?php echo $u->jurusan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Angkatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="angkatan" class="form-control" value="<?php echo $u->angkatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="col-lg-3 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                                </div><br><br><br><br>
                            </fieldset>
                            </div>
                        </div>
                        <?php } ?>
                        </form> 
                    </div>
                </div>
                
<!-- upload Sekretaris ================================================================================================= -->
                
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur_page/update_sekretaris" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/sekretaris.jpg">

<!-- Profil Sekretaris ==================================================================================================== -->
                         
                        <?php foreach($ukm_sekretaris as $u){ ?>
                        <form action="<?php echo base_url(). 'admin_struktur_page/update_profil_sekretaris'; ?>" method="post">

                        <div class="col-md-12 col-md-push-0">
                            <div class="bs-example">
                            <fieldset>
                                <br>
                                <div class="form-group">
                                <label class="col-lg-2 control-label">Nama</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jabatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jabatan" class="form-control" value="<?php echo $u->jabatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jurusan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jurusan" class="form-control" value="<?php echo $u->jurusan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Angkatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="angkatan" class="form-control" value="<?php echo $u->angkatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="col-lg-3 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                                </div><br><br><br><br>
                            </fieldset>
                            </div>
                        </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>

            <div class="row">

<!-- Upload Bendahara ================================================================================================ -->
                
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur_page/update_bendahara1" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/bendahara1.jpg">
                         
<!-- Profil Bendahara1 ==================================================================================================== -->
                         
                        <?php foreach($ukm_bendahara1 as $u){ ?>
                        <form action="<?php echo base_url(). 'admin_struktur_page/update_profil_bendahara1'; ?>" method="post">

                        <div class="col-md-12 col-md-push-0">
                            <div class="bs-example">
                            <fieldset>
                                <br>
                                <div class="form-group">
                                <label class="col-lg-2 control-label">Nama</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jabatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jabatan" class="form-control" value="<?php echo $u->jabatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jurusan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jurusan" class="form-control" value="<?php echo $u->jurusan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Angkatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="angkatan" class="form-control" value="<?php echo $u->angkatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="col-lg-3 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                                </div><br><br><br>
                            </fieldset>
                            </div>
                        </div>
                        <?php } ?>
                        </form> 
                    </div>
                </div>

<!-- Upload Bendahara II ============================================================================================= -->
                
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur_page/update_bendahara2" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/bendahara2.jpg">
                         
<!-- Profil Bendahara2 ==================================================================================================== -->
                         
                        <?php foreach($ukm_bendahara2 as $u){ ?>
                        <form action="<?php echo base_url(). 'admin_struktur_page/update_profil_bendahara2'; ?>" method="post">

                        <div class="col-md-12 col-md-push-0">
                            <div class="bs-example">
                            <fieldset>
                                <br>
                                <div class="form-group">
                                <label class="col-lg-2 control-label">Nama</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jabatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jabatan" class="form-control" value="<?php echo $u->jabatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jurusan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jurusan" class="form-control" value="<?php echo $u->jurusan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Angkatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="angkatan" class="form-control" value="<?php echo $u->angkatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="col-lg-3 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                                </div><br><br><br>
                            </fieldset>
                            </div>
                        </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>

<!-- Upload Humas ==================================================================================================== -->
               
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur_page/update_humas" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/humas.jpg">
                         
<!-- Profil Humas ==================================================================================================== -->
                         
                        <?php foreach($ukm_humas as $u){ ?>
                        <form action="<?php echo base_url(). 'admin_struktur_page/update_profil_humas'; ?>" method="post">

                        <div class="col-md-12 col-md-push-0">
                            <div class="bs-example">
                            <fieldset>
                                <br>
                                <div class="form-group">
                                <label class="col-lg-2 control-label">Nama</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jabatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jabatan" class="form-control" value="<?php echo $u->jabatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Jurusan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="jurusan" class="form-control" value="<?php echo $u->jurusan ?>">
                                    </div>
                                </div><br><br>

                                <div class="form-group">
                                <label class="col-lg-2 control-label">Angkatan</label><br>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                        <input type="text" name="angkatan" class="form-control" value="<?php echo $u->angkatan ?>">
                                    </div>
                                </div><br><br>

                                <div class="col-lg-3 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                                </div><br><br><br>
                            </fieldset>
                            </div>
                        </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <h2>Keterangan :</h2>
        <label>- Foto Harus berukuran 200 px * 200 px</label>
    </section>



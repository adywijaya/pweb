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
                         
                    </div>
                </div>

                <?php 
    foreach ($this->m_struktur->getorganisasi() as $pengurus) {

    
 ?>
 <form action="<?php echo base_url(). 'admin_struktur_page/updateorg' ?>" method="post" enctype='multipart/from-data'>
                <div class="col-sm-4" >
                    <div class="team-member">
                   
                        <input type="hidden" name="id" value="<?= $pengurus['id'] ?>">
                    
                        <p>
                        <input class="form-control" name='nama' placeholder="Nama Lengkap" type="text" id="nama" required="required" 
                        value="<?= $pengurus['nama']?>">
                        </p>

                        <p>
                        <input class="form-control" name='jabatan' placeholder="Jabatan" type="text" id="jabatan" required="required"
                        value="<?= $pengurus['jabatan']?>">
                        </p>

                        <p>
                        <input class="form-control" name='jurusan' placeholder="Jurusan" type="text" id="link" 
                        value="<?= $pengurus['jurusan']?>">
                        </p>

                        <p>
                        <input class="form-control" name='angkatan' placeholder="Angkatan" type="text" id="link" 
                        value="<?= $pengurus['angkatan']?>">
                        </p>
                        
                        <br>    
                        <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                                
                    </div>
                </div>
</form>
<?php
    }
?>

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
                         
                        
                        
                    </div>
                </div>

                                <?php 
    foreach ($this->m_struktur->getorganisasi2() as $pengurus) {

    
 ?>
 <form action="<?php echo base_url(). 'admin_struktur_page/updateorg2' ?>" method="post" enctype='multipart/from-data'>
                <div class="col-sm-4" >
                    <div class="team-member">
                   
                        <input type="hidden" name="id" value="<?= $pengurus['id'] ?>">
                    
                        <p>
                        <input class="form-control" name='nama' placeholder="Nama Lengkap" type="text" id="nama" required="required" 
                        value="<?= $pengurus['nama']?>">
                        </p>

                        <p>
                        <input class="form-control" name='jabatan' placeholder="Jabatan" type="text" id="jabatan" required="required"
                        value="<?= $pengurus['jabatan']?>">
                        </p>

                        <p>
                        <input class="form-control" name='jurusan' placeholder="Jurusan" type="text" id="link" 
                        value="<?= $pengurus['jurusan']?>">
                        </p>

                        <p>
                        <input class="form-control" name='angkatan' placeholder="Angkatan" type="text" id="link" 
                        value="<?= $pengurus['angkatan']?>">
                        </p>
                        
                        <br>    
                        <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                                
                    </div>
                </div>
</form>
<?php
    }
?>
            </div>
        </div>

        <br><br>
        <h2>Keterangan :</h2>
        <label>- Foto Harus berukuran 200 px * 200 px</label>
    </section>



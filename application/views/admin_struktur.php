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

<!-- Upload Ketua ==================================================================================================== -->
                
                <div class="col-sm-4">
                    <div class="team-member">

                        <form role="form" action="<?= base_url()?>admin_struktur/update_ketua" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/ketua.jpg">
                    
                        <?php foreach($ukm_ketua as $u){ ?>
                        <h4><?php echo $u->nama ?></h4>
                        <p class="text-muted"></p>
                        <p class="text-muted"><?php echo $u->jabatan ?></p>
                        <p class="text-muted"><?php echo $u->jurusan ?></p>
                        <p class="text-muted"><?php echo $u->angkatan ?></p>                        
                        <?php } ?>

                    </div>
                </div>

<!-- Upload Wakil ==================================================================================================== -->
                
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur/update_wakil" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/wakil.jpg">

                        <?php foreach($ukm_wakil as $u){ ?>
                        <h4><?php echo $u->nama ?></h4>
                        <p class="text-muted"></p>
                        <p class="text-muted"><?php echo $u->jabatan ?></p>
                        <p class="text-muted"><?php echo $u->jurusan ?></p>
                        <p class="text-muted"><?php echo $u->angkatan ?></p>                        
                        <?php } ?> 
                    </div>
                </div>
                

<!-- upload Sekretaris =============================================================================================== -->
                
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur/update_sekretaris" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/sekretaris.jpg">
                         
                        <?php foreach($ukm_sekretaris as $u){ ?>
                        <h4><?php echo $u->nama ?></h4>
                        <p class="text-muted"></p>
                        <p class="text-muted"><?php echo $u->jabatan ?></p>
                        <p class="text-muted"><?php echo $u->jurusan ?></p>
                        <p class="text-muted"><?php echo $u->angkatan ?></p>                        
                        <?php } ?> 
                    </div>
                </div>
            </div>

            <div class="row">

<!-- Upload Bendahara ================================================================================================ -->
                
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur/update_bendahara1" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/bendahara1.jpg">
                         
                        <?php foreach($ukm_bendahara1 as $w){ ?>
                        <h4><?php echo $w->nama ?></h4>
                        <p class="text-muted"></p>
                        <p class="text-muted"><?php echo $w->jabatan ?></p>
                        <p class="text-muted"><?php echo $w->jurusan ?></p>
                        <p class="text-muted"><?php echo $w->angkatan ?></p>                        
                        <?php } ?> 
                    </div>
                </div>

<!-- Upload Bendahara II ============================================================================================= -->
                
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur/update_bendahara2" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/bendahara2.jpg">
                         
                        <?php foreach($ukm_bendahara2 as $w){ ?>
                        <h4><?php echo $w->nama ?></h4>
                        <p class="text-muted"></p>
                        <p class="text-muted"><?php echo $w->jabatan ?></p>
                        <p class="text-muted"><?php echo $w->jurusan ?></p>
                        <p class="text-muted"><?php echo $w->angkatan ?></p>                        
                        <?php } ?> 
                    </div>
                </div>

<!-- Upload Humas ==================================================================================================== -->
               
                <div class="col-sm-4">
                    <div class="team-member">
                    
                        <form role="form" action="<?= base_url()?>admin_struktur/update_humas" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                            </div>
                            <input type="submit" class="btn btn-default" value="Update">
                        </form>

                        <img class="img-responsive img-circle" src="assets/foto/humas.jpg">
                         
                        <?php foreach($ukm_humas as $w){ ?>
                        <h4><?php echo $w->nama ?></h4>
                        <p class="text-muted"></p>
                        <p class="text-muted"><?php echo $w->jabatan ?></p>
                        <p class="text-muted"><?php echo $w->jurusan ?></p>
                        <p class="text-muted"><?php echo $w->angkatan ?></p>                        
                        <?php } ?> 


                    </div>
                </div>
            </div>
        </div>
    </section>



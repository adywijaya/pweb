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
                <div class="col-sm-4">
                    <div class="team-member">
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
                <div class="col-sm-4">
                    <div class="team-member">
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
                <div class="col-sm-4">
                    <div class="team-member">
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
                <div class="col-sm-4">
                    <div class="team-member">
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
                <div class="col-sm-4">
                    <div class="team-member">
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
                <div class="col-sm-4">
                    <div class="team-member">
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


   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>

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
                          
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="img-responsive img-circle" src="assets/foto/wakil.jpg">
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="img-responsive img-circle" src="assets/foto/sekretaris.jpg">

                    </div>
                </div>

                 <?php 
                foreach ($this->m_struktur->getorganisasi() as $struktur) {            
                ?>
                <div class="col-sm-4">
                    <div class="team-member">
                            <h4><?= $struktur['nama'] ?></h4>
                            <p class="text-muted"><?= $struktur['jabatan'] ?></p>
                            <p class="text-muted"><?= $struktur['jurusan'] ?></p>
                            <p class="text-muted"><?= $struktur['angkatan'] ?></p>
                    </div>
                </div>
                <?php } ?> 


            
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

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


            <?php 
            foreach ($this->m_struktur->getorganisasi() as $struktur) {  
            ?>
            <div class="col-sm-4" >
                <div class="team-member">
                    <form role="form" action="<?= base_url()?><?= $struktur['url'] ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                            <input type="file" class="form-control" placeholder="Load Foto" name="foto">
                        </div>
                        <input type="submit" class="btn btn-default" value="Update">
                    </form>

                    <form action="<?php echo base_url(). 'admin_struktur_page/updateorg' ?>" method="post" enctype='multipart/from-data'>

                        <img class="img-responsive img-circle" src="<?= $struktur['scr'] ?>">                   
                        <input type="hidden" name="id" value="<?= $struktur['id'] ?>"><br>

                        <p> <h6 class="text-left">Nama :</h6>
                        <input class="form-control" name='nama' placeholder="Nama Lengkap" type="text" id="nama" required="required" 
                        value="<?= $struktur['nama']?>">
                        </p>

                        <p> <h6 class="text-left">Jabatan :</h6>
                        <input class="form-control" name='jabatan' placeholder="Jabatan" type="text" id="jabatan" required="required"
                        value="<?= $struktur['jabatan']?>">
                        </p>
                         
                        <p> <h6 class="text-left">Jurusan :</h6>
                        <input class="form-control" name='jurusan' placeholder="Jurusan" type="text" id="link" 
                        value="<?= $struktur['jurusan']?>">
                        </p>
                            
                        <p> <h6 class="text-left">Angkatan :</h6>
                        <input class="form-control" name='angkatan' placeholder="Angkatan" type="text" id="link" 
                        value="<?= $struktur['angkatan']?>">
                        </p>

                        <br>    
                        <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>

                    </form>                  
                </div>
            </div>
            
            <?php
            }
            ?>

        <br><br>
        <h2>Keterangan :</h2>
        <label>- Foto Harus berukuran 200 px * 200 px</label>
        </div>
    </section>
    



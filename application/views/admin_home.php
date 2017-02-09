 <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Home</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fontaw fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Info Uang Kas</h4>

                    <?php foreach($kas as $u){ ?>
                    <form action="<?php echo base_url(). 'crud_home_page/update_info_kas'; ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <div class="col-lg-12">
                            <textarea rows="14" class="form-control" name="kas"><?php echo $u->kas ?></textarea><br>
                        </div><br>

                        <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                    </form>
                    <?php } ?>
                </div>

                <div class="col-md-4">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fontaw fa fa-user fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Dapatkan Point</h4>

                    <?php foreach($info as $a){ ?>
                    <form action="<?php echo base_url(). 'crud_home_page/update_info_point'; ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $a->id ?>">
                        <div class="col-lg-12">
                            <textarea rows="14" class="form-control" name="info"><?php echo $a->info ?></textarea><br>
                        </div><br>

                        <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                    </form>
                    <?php } ?>
                </div>
                
                <div class="col-md-4 row text-center">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fontaw fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                    <center><h4 class="service-heading">Planning Kegiatan</h4></center>
                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Acara</th> 
                                <th>Action</th>             
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($planning as $u){ ?>
                            <tr>
                                <td><?php echo $u->tanggal ?></td>
                                <td><?php echo $u->acara ?></td>
                                <td>
                                      <?php echo anchor('crud_home_page/edit/'.$u->id,'Edit'); ?>
                                                  <?php echo anchor('crud_home_page/hapus/'.$u->id,'Hapus'); ?>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>

                    </table>
                    <div class="text-center">
                        <a href="crud_home_page/tambah"><button class="btn btn-primary">tambah</button></a> 
                    </div>
                </div>     
            </div>
        </div>
    </section>

 

   

   


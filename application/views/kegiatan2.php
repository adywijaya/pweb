    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kegiatan</h2>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <h4 class="service-heading text-left">Agenda</h4>
                        <table class="table table-bordered table-striped text-justify">
                            <thead> 
                                <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Tempat</th>
                                <th>Acara</th> 
                                <th>Action</th>            
                            </tr>
                            <?php 
                            $no = 1;
                            foreach($kegiatan as $u){ 
                            ?>
                            <tr>
                                <td><?php echo $u->tanggal ?></td>
                                <td><?php echo $u->jam ?></td>
                                <td><?php echo $u->tempat ?></td>
                                <td><?php echo $u->acara ?></td>
                                <td>
                                      <?php echo anchor('kegiatan2/edit/'.$u->id,'Edit'); ?>
                                                  <?php echo anchor('kegiatan2/hapus/'.$u->id,'Hapus'); ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </thead>
                    </table>
                    <a href="http://localhost/pweb/kegiatan2/tambah"><button >tambah</button></a> 
                </div>    
            </div>
    </section>

    
    <br><br><br>

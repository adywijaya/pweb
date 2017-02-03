<!-- Services Section -->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kegiatan</h2>
                </div>
            </div>

            <div class="row text-left">
                <div class="col-md-12">
                    <h4 class="service-heading text-left">Agenda Kegiatan</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Tempat</th>
                                <th>Acara</th> 
                                <th>Action</th>            
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($kegiatan as $u){ ?>
                            <tr>
                                <td><?php echo $u->tanggal ?></td>
                                <td><?php echo $u->jam ?></td>
                                <td><?php echo $u->tempat ?></td>
                                <td><?php echo $u->acara ?></td>
                                <td>
                                      <?php echo anchor('crud_kegiatan/edit/'.$u->id,'Edit'); ?>
                                                  <?php echo anchor('crud_kegiatan/hapus/'.$u->id,'Hapus'); ?>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a href="crud_kegiatan/tambah"><button >tambah</button></a>  
                    </div>  
                </div>
            </div>
        </div>
    </section>

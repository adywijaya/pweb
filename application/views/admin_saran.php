    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kritik & Saran</h2>
                </div>
            </div>

            <div class="col-md-10 col-md-push-1">
            <div class="bs-example">
            

<!-- Tampil Saran ==================================================================================================== -->
                    <br><br>
                    <h2 class="section-heading"></h2>
                    <table class="table table-striped table-striped text-justify">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>email</th>
                                <th>Saran</th> 
                                <th>Action</th>            
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($saran as $u){ ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->email ?></td>
                                <td><?php echo $u->saran ?></td>
                                <td>
                                                  <?php echo anchor('admin_saran_page/hapus/'.$u->id,'Hapus'); ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </section>




                                              
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kritik & Saran</h2>
                    <br><br>
                </div>
            </div>

            <div class="col-md-10 col-md-push-1">
            <div class="bs-example">
            
                    <form action="<?php echo base_url(). 'saran/tambah_aksi'; ?>" method="post" class="form-horizontal">
                        <fieldset>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-6">
                                <input type="text" name="nama" class="form-control" id="inputEmail" placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                                <input type="Email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                               
                        <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Kritik dan Saran</label>
                            <div class="col-lg-10">
                                <textarea required="required" class="form-control" type="text" name="saran" rows="3" id="textArea" placeholder="Masukkan Kritik & saranmu"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-10 col-lg-offset-4">
                            <button type="submit" class="btn btn-primary" value="Kirim Saran">Submit</button>
                        </div>
                        </fieldset>
                    </form>

<!-- Tampil Saran ===================================================================================================== -->
                    <br><br><br>
                    <h2 class="section-heading"></h2>
                    <div class="table-responsive">
                    <table class="table table-striped table-striped text-justify table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>email</th>
                                <th>Saran</th>             
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($saran as $u){ ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->email ?></td>
                                <td><?php echo $u->saran ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </section>




                                              
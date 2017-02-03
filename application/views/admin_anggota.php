    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Anggota UKM</h2>
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
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Jenis kelamin</th>
                                <th>Email</th> 
                                <th>Jurusan</th>   
                                <th>Point</th>            
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($users as $u){ ?>
                            <tr>
                                <td><?php echo $u->nim ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->jenis_kelamin ?></td>
                                <td><?php echo $u->email ?></td>
                                <td><?php echo $u->jurusan ?></td>
                                <td><?php echo $u->point ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
    
            </div>
        </div>
    </section>




                                              
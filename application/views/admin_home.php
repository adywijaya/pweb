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
                    <p class="text-muted">Nah guys ini kata yang agak sedikit horror untuk beberapa orang, disini karena kita akan aktif melakukan berbagai kegiatan. Dan tentu saja itu tidak menggunakan dana kecil, nah disinilah uang kas berfungsi sebagai tambahan dana dalam kegiatan kita. Sehingga kita tidak merasa terbebani dengan adanya biaya kegiatan. So guys kami tekan disni kami tidak mengambil keuntungan dari dana yang kalian berikan namun akan digunakan dalam berbagai kegiatan terutama dalam baksos. Biaya kas yang diberikan sebesar 
                    <b> Rp 25.000/bulan </b></p>
                </div>
                <div class="col-md-4">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fontaw fa fa-user fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Dapatkan Point</h4>
                    <p class="text-muted">Bagi seluruh anggota ukm bodhivijja akan mendapatkan point khusus bagi mahasiswa STIMIK KHARISMA MAKASSAR ketika mengikuti setiap kegiatan yang dilakukan ukm bodhivijja. Terutama saat mengikuti hari perayaan agama buddha seperti waisak,kathina,magha puja dan asadha. </p>
                </div>
                
                <div class="col-md-4 row text-left">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fontaw fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Planning Kegiatan</h4>
                    <table class="table">

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
                                      <?php echo anchor('crud_home/edit/'.$u->id,'Edit'); ?>
                                                  <?php echo anchor('crud_home/hapus/'.$u->id,'Hapus'); ?>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>

                    </table>
                    <div class="text-center">
                        <a href="crud_home/tambah"><button >tambah</button></a> 
                    </div>
                </div>     
            </div>
        </div>
    </section>

 

   

   


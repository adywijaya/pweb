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
                    <h4 class="service-heading text-left">Agenda</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Tempat</th>
                                <th>Acara</th>            
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($kegiatan as $u){ ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->tanggal ?></td>
                                <td><?php echo $u->jam ?></td>
                                <td><?php echo $u->tempat ?></td>
                                <td><?php echo $u->acara ?></td>
                            </tr>
                            <?php } ?>  
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </section>


       <div class="container">
        <div class="col-lg-12">
    <!-- begin wwww.htmlcommentbox.com -->
            <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Box</a> is loading comments...
            </div>
                <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
                <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24Nk.I2qQG%2FQw%2F.I8RmX.PP1"+"&opts=16862&num=10&ts=1483788473111");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ 
                </script>
<!-- end www.htmlcommentbox.com -->
        </div>
    </div>
    
    <br><br><br>

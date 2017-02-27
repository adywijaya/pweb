    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Website!</div>
                <div class="intro-heading">UKM Bodhivijja</div>
                <a href="#services" class="page-scroll btn btn-xl">Info</a>
            </div>
        </div>
    </header>

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
                <div class="col-md-3">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fontaw fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Info Uang Kas</h4>
                    <?php foreach($kas as $u){ ?>
                    <p class="text-muted"><?php echo $u->kas ?></p>
                    <?php } ?>
                </div>

                <div class="col-md-3">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fontaw fa fa-user fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Dapatkan Point</h4>
                    <?php foreach($info as $u){ ?>
                    <p class="text-muted"><?php echo $u->info ?></p>
                    <?php } ?>
                </div>

                <div class="col-md-3 row text-center">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fontaw fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Planning Kegiatan</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Acara</th>              
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($planning as $u){ ?>
                            <tr>
                                <td><?php echo $u->tanggal ?></td>
                                <td><?php echo $u->acara ?></td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>

                    </table>
                </div>

                <div class="col-md-3">
                    <span class="fontaw fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-commenting-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Live Chat</h4>
                    <script id="cid0020000145635959142" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 257px;height: 320px;">{"handle":"ukm-bodhivijja","arch":"js","styles":{"a":"e0e0e0","b":100,"c":"000000","d":"000000","k":"e0e0e0","l":"e0e0e0","m":"e0e0e0","p":"10","q":"e0e0e0","r":100,"fwtickm":1}}</script>
                </div>
            </div>
        </div>
    </section>

 

   

   

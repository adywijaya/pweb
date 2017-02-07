<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Bodhivijja</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>
                        <a href="kegiatan">Kegiatan</a>
                    </li>
                    <li>
                        <a href="struktur">Struktur</a>
                    </li>
                    <li>
                        <a href="visi">Visi & Misi</a>
                    </li>
                    <li>
                        <a href="tentang">Tentang Kampus</a>
                    </li>
                    <li>
                        <a href="saran">Kritik & Saran</a>
                    </li> 
                    
                    <?php
                        if( isset( $_SESSION['user_name'] ) ) {
                    ?>
                            <li> 
                              <a href="<?= base_url()?>reward">Reward</a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>logout">Logout</a>
                            </li>
                    <?php
                        } else {
                     ?>
                     <li>
                         <a href="register">Pendaftaran</a>
                     </li>
                     <li>
                         <a href="<?= base_url()?>login">login</a>
                     </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UKM Bodhivijja</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../assets/css/agency.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .text_indent{
            text-indent: 40px;
        }
    </style>

</head>

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
                        <a href="<?= base_url()?>home">Home</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form action=" <?= base_url()?>admin/dologin" method="post">
          <h2 class="text-center"><i class="fa fa-user" aria-hidden="true"></i> Login Admin
          <hr class="hr">
          </h2>

          <?php
          switch( @$_SESSION['notif'] ){
            case 1:
            echo "<div class='alert alert-danger' role='alert'>
            <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
            username atau password anda salah !
            </div>";
            session_destroy();
            break;
          }
          ?>

          <div class="col-md-12 col-md-push-2
            <div class="bs-example">
            <fieldset>
              <div class="form-group">
                <label class="col-lg-2 control-label">Username</label>
                <div class="col-lg-6">
                  <input type="text" class="form-control" name="username"></center>
                </div>
              </div><br><br>

              <div class="form-group">
                  <label class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-6">
                    <input type="password" class="form-control" name="password"></center>
                  </div>
              </div><br><br>
              
              <div class="col-lg-3 col-lg-offset-3">
                  <button type="submit" class="btn btn-primary" value="login">Login</button>
              </div>
            </fieldset>
            </div>
          </div>  
        </form>
      </div>
    </div>
  </div>
</section>

    <footer>
        <hr>
        <a href="<?= base_url()?>admin/login">admin</a>
    </footer>
    
 <!-- jQuery -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../assets/js/jqBootstrapValidation.js"></script>
    <script src="../assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../assets/js/agency.min.js"></script>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <script src="../assets/js/ajax.js"></script>
    



</body>

</html>
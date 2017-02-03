<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form action=" <?php echo base_url('admin/aksi_login'); ?>" method="post">
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

          <form role="form">

            <div class="form-group">
              <center><label> <h5>Username :</h5></label>
              <input type="text" lass="form-control" name="username"></td></center>
            </div>

            <div class="form-group">
              <center><label> <h5>Password :</h5></label>
              <input type="password" lass="form-control" name="password"></center>
            </div>


            <div class="row">
              <br>
              <center>
              <input type="submit" value="login">
              </center>
            </div>
          </form>
        </form>
      </div>
    </div>
  </div>
</section>

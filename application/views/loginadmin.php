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

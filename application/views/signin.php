<section id="services">
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>

                <div style="padding-top:20px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" role="form" action="<?=base_url()?>dologin" method="post">
                      <?php
                      switch( $status ){
                        case 1:
                        echo "<div class='alert alert-danger' role='alert'>
                        <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
                        Sign-in Gagal:
                        Username tidak dikenali atau salah tulis
                        </div>";
                        break;
                        case 2:
                        echo "<div class='alert alert-danger' role='alert'>
                        <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
                        Sign-in Gagal: Password tidak sesuai
                        </div>";
                        break;
                        case 3:
                        echo "<div class='alert alert-danger' role='alert'>
                        <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
                        Anda Sudah Logout
                        </div>";
                        break;
                      }
                      ?>
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                                </div>

                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                </div>



                        <div class="input-group">
                                  <div class="checkbox">
                                    <label>
                                      <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                  </div>
                                </div>


                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                  <input type="submit" id="btn-login" class="btn btn-default" value="Login">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:100%" >
                                        Don't have an account!
                                    <a href="register">Sign Up Here</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
          </div>
     </div>
</div>
</section>

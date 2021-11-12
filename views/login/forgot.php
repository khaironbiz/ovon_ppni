<div class="login-box">
  <div class="login-logo mt-5 mb-5">
    
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="input-group mb-3 col-md-12">
          <img src="<?= $site_url?>assets/images/ovon-logo1.png" width="295px">
      </div>
      <?php
      include("aksi/forgot-password.php");
      ?>
      <p class="login-box-msg">Forgot Password</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="username">
          <input type="hidden" class="form-control" name="forgot_password" value="<?= uniqid() ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12">
            <p class="mb-1">
              <a href="<?= $site_url;?>/login">Login</a>
            </p>
            <p class="mb-1">
              <a href="<?= $site_url;?>/login/register.php">Daftar</a>
            </p>
          </div>          
        </div>
      </form>
      <?php
      include("aksi/forgot-password.php");
      ?>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

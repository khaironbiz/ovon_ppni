<div class="login-box">
  <div class="login-logo">
    <a href="<?= $site_url ?>"><b><?= $nama_web;?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
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
          <div class="col-8">
            <p class="mb-1">
              <a href="<?= $site_url;?>/login">Login</a>
            </p>
            <p class="mb-1">
              <a href="<?= $site_url;?>/login/register.php">Be Contributor</a>
            </p>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Reset</button>
          </div>
          <!-- /.col -->
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

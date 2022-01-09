<div class="login-box">
  <div class="login-logo mt-5 mb-5">
    
  </div>
  <!-- /.login-logo -->
  
  <div class="card mt-5">
    <div class="card-body login-card-body">
      <div class="input-group mb-3 col-md-12">
          <img src="<?= $site_url?>/assets/images/ovon-logo1.png" width="295px">
      </div>
      <p class="login-box-msg">Sign in to start your session</p>
      <?php
      include("aksi/login.php");
      if(isset($_SESSION['status'])&& $_SESSION['status'] !=""){
      ?>
        <div class="alert alert-<?= $_SESSION['status_info']?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['status']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <?php
        unset($_SESSION['status']);
      }
      ?>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="username">
          <input type="hidden" class="form-control" name="key" value="<?= rand(100000,999999) ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-1">
        <a href="<?= $site_url;?>/login/forgot.php">Lupa Password</a>
      </p>
      <p class="mb-1">
        <a href="<?= $site_url;?>/login/register.php">Daftar</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

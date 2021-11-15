<div class="register-box">
  <div class="register-logo mt-5 mb-5">
  </div>
  <div class="card">
    <div class="card-body register-card-body">
      <div class="input-group mb-3 col-md-12">
          <img src="<?= $site_url?>/assets/images/ovon-logo1.png" width="295px">
      </div>
      <p class="login-box-msg">Register a new membership</p>
      <?php
      
      //include("aksi/session-flash.php");
      if(isset($_SESSION['status']) && $_SESSION['status'] !=""){
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
      <form action="<?= $site_url?>login/save-daftar.php" method="post">
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Secret Key" name="key" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="user_nama" required>
          <input type="hidden" class="form-control" name="add_user" value="<?= uniqid()?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Nomor KTP" name="nik" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="far fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password1" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password2" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="icheck-primary">
            <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
            <label for="agreeTerms">
              I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <div class="row">
          
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php
      include("aksi/register.php");
      ?>

      <a href="<?= $site_url?>/login" class="text-center">Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
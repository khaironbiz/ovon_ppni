<?php
include("aksi/reset-password.php");
?>
<div class="register-box">
    <div class="register-logo">
        <a href="#"><b><?= $nama_web;?></b></a><br>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Reset Your Password</p>
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" value="<?= $data_user['email'] ?>" readonly>
                <input type="hidden" class="form-control" name="reset_password" value="<?= $data_user['kode_aktifasi'] ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password1">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Retype password" name="password2">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">I agree to the <a href="#">terms</a></label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Reset</button>
            </div>
            <!-- /.col -->
        </div>
        </form>
        <a href="<?= $site_url?>/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->
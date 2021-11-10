<?php

if(isset($_POST['add_user'])){
    $user_nama      = $_POST['user_nama'];
    $email          = $_POST['email'];
    $password1      = $_POST['password1'];
    $password2      = $_POST['password2'];
    if($password1=$password2){
        $password       = md5($password1);
        $kode_aktifasi  = uniqid();
        $has_user       = md5($kode_aktifasi);
        $time           = date("Y-m-d H:i:s");
        $secret_key     = $_POST['key'];
        $nik            = $_POST['nik'];
        $sql_key        = mysqli_query($host,"SELECT * FROM master_key WHERE 
                            master_key  ='$secret_key' AND 
                            valid_until > '$time'");
        $count_key      = mysqli_num_rows($sql_key);        
        if($count_key>0){
            $data_key       = mysqli_fetch_array($sql_key);
            $prov           = $data_key['prov'];
            $kota           = $data_key['kota'];
            $kecamatan      = $data_key['kecamatan'];
            $kelurahan      = $data_key['kelurahan'];
            $valid_until    = $data_key['valid_until'];
            $sql_email      = mysqli_query($host,"SELECT * FROM users WHERE email ='$email'");
            $count_email    = mysqli_num_rows($sql_email);
            if($count_email<1){
                $tambah_user=mysqli_query($host, "INSERT INTO users SET
                        user_nama       = '$user_nama',
                        nik             = '$nik',
                        email           = '$email',
                        prov            = '$prov',
                        kota            = '$kota',
                        kec             = '$kecamatan',
                        kel             = '$kelurahan',
                        pass            = '$password',
                        kode_aktifasi   = '$kode_aktifasi',
                        created_at      = '$time',
                        secret_key      = '$secret_key',
                        aktif_sd        = '$valid_until',
                        has_user        = '$has_user'");
                if($tambah_user){
                    $_SESSION['status']="Data berhasil disimpan";
                    $_SESSION['status_info']="success";
                    echo "<script>document.location=\"$site_url/login/register.php\"</script>";
                }else{
                $_SESSION['status']="User gagal ditambah";
                $_SESSION['status_info']="danger";
                echo "<script>document.location=\"$site_url/login/register.php\"</script>";
            }
            }else{
                $_SESSION['status']="Email sudah terdaftar";
                $_SESSION['status_info']="danger";
                echo "<script>document.location=\"$site_url/login/register.php\"</script>";
            }
        }else{
            $_SESSION['status']="Key tidak terdaftar";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/login/register.php\"</script>";
        }
    }else{
    $_SESSION['status']="Password tidak sama";
    $_SESSION['status_info']="danger";
    echo "<script>document.location=\"$site_url/login/register.php\"</script>";
    }
}


<?php

if(isset($_SESSION['login_user'])){
    header("location: $site_url/dashboard/"); // Mengarahkan ke halaman profil
}

if (isset($_POST['key'])) {
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);
    $queryuser  = mysqli_query($host,"SELECT * FROM users WHERE email='$username' AND status='$status'");
    $cont_email = mysqli_num_rows($queryuser);
    //
    $query      = mysqli_query($host,"SELECT * FROM users WHERE pass='$password' AND email='$username'");
    $count_user = mysqli_num_rows($query);
    $data_user  = mysqli_fetch_array($query);
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['status']         = "Username or Password is required";
        $_SESSION['status_info']    = "danger";
        header("location: $site_url/login/");
        // Variabel username dan password
        }else{
            if ($cont_email <1) {
                $_SESSION['status']="Email tidak terdaftar";
                $_SESSION['status_info']="danger";
                echo "<script>document.location=\"$site_url/login/\"</script>";
            }else{
                if ($count_user == 1) {
                    $_SESSION['login_user'] = $data_user['id_user']; // Membuat Sesi/session
                    $_SESSION['email']      = $data_user['email']; // Membuat Sesi/session
                    $_SESSION['kel']        = $data_user['kel'];
                    $_SESSION['status']="Login sukses";
                    $_SESSION['status_info']="success";
                    header("location: $site_url/profile/"); // Mengarahkan ke halaman profil
                    }else{
                        $_SESSION['status']="Username & pasword not mach";
                        $_SESSION['status_info']="danger";
                        echo "<script>document.location=\"$site_url/login/\"</script>";
                    }
            }
        }
        mysql_close($host); // Menutup koneksi
    }

if(isset($_GET['key'])){
    $key        = $_GET['key'];
    $aktif_user = mysqli_query($host,"UPDATE users SET status = '1' WHERE has_user='$key'");
    if($aktif_user){
        $_SESSION['status']="Selamat akun anda telah aktif";
        $_SESSION['status_info']="success";
        echo "<script>document.location=\"$site_url/login/\"</script>";
    }else{
        $_SESSION['status']="Maaf...!!!! aktifasi akun gagal";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/login/\"</script>";
    }
};

?>

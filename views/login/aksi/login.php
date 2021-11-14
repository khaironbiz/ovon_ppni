<?php

if(isset($_SESSION['login_user'])){
    header("location: $site_url/dashboard/"); // Mengarahkan ke halaman profil
}

if (isset($_POST['key'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['status']         = "Username or Password is required";
        $_SESSION['status_info']    = "danger";
        header("location: $site_url/login/");
        // Variabel username dan password
        }else{
            $username   = $_POST['username'];
            $password   = md5($_POST['password']);
            $status     = 1;
            $queryuser  = mysqli_query($host,"SELECT * FROM users WHERE email='$username' AND status='$status'");
            $rows1      = mysqli_num_rows($queryuser);
            if ($rows1 <1) {
                $_SESSION['status']="Email tidak terdaftar";
                $_SESSION['status_info']="danger";
                echo "<script>document.location=\"$site_url/login/\"</script>";
            }else{
                $query      = mysqli_query($host,"SELECT * FROM users WHERE pass='$password' AND email='$username'");
                $rows       = mysqli_num_rows($query);
                $data_user  = mysqli_fetch_array($query);
                if ($rows == 1) {
                    $_SESSION['login_user'] = $data_user['id_user']; // Membuat Sesi/session
                    $_SESSION['email']      = $data_user['email']; // Membuat Sesi/session
                    $_SESSION['kel']        = $data_user['kel'];
                    header("location: $site_url/dashboard/"); // Mengarahkan ke halaman profil
                    }else{
                        $_SESSION['status']="Maaf kombinasi username dan pasword tidak sesuai";
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

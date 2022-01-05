<?php

if(isset($_SESSION['login_user'])){
    header("location: $site_url/dashboard/"); // Mengarahkan ke halaman profil
}

if (isset($_POST['key'])) {
    $today      = date('Y-m-d');
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);
    $queryuser  = mysqli_query($host,"SELECT * FROM users WHERE email='$username'");
    $cont_email = mysqli_num_rows($queryuser);
    //
    
    $query      = mysqli_query($host,"SELECT * FROM users WHERE pass='$password' AND email='$username'");
    $count_user = mysqli_num_rows($query);
    $data_user  = mysqli_fetch_array($query);
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['status']         = "Username or Password is required";
        $_SESSION['status_info']    = "danger";
        echo "<script>document.location=\"$site_url/login/\"</script>";
        // Variabel username dan password
        }elseif($cont_email <1){
                $_SESSION['status']="Email tidak terdaftar";
                $_SESSION['status_info']="danger";
                echo "<script>document.location=\"$site_url/login/\"</script>";
                }elseif($count_user < 1){
                    $_SESSION['status']="Username & pasword not mach";
                    $_SESSION['status_info']="danger";
                    echo "<script>document.location=\"$site_url/login/\"</script>";
                        }elseif($data_user['aktif_sd'] < $today){
                        $_SESSION['status']="Akun kadaluarsa";
                        $_SESSION['status_info']="danger";
                        echo "<script>document.location=\"$site_url/login/\"</script>";
                            }elseif($data_user['status'] < 1){
                            $_SESSION['status']="Akun belum aktif";
                            $_SESSION['status_info']="danger";
                            echo "<script>document.location=\"$site_url/login/\"</script>";
                            }elseif($count_user == 1){
                                    $_SESSION['login_user'] = $data_user['id_user']; // Membuat Sesi/session
                                    $_SESSION['email']      = $data_user['email']; // Membuat Sesi/session
                                    $_SESSION['kel']        = $data_user['kel'];
                                    $_SESSION['status']="Login sukses";
                                    $_SESSION['status_info']="success";
                                    echo "<script>document.location=\"$site_url/profile/\"</script>";
                                    }else{
                                        $_SESSION['status']="Username & pasword not mach";
                                        $_SESSION['status_info']="danger";
                                        echo "<script>document.location=\"$site_url/login/\"</script>";
                                    }
        mysql_close($host); // Menutup koneksi
    }



?>

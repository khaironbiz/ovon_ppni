<?php

session_start(); // Memulai Session
$error = ''; // Variabel untuk menyimpan pesan error
if (isset($_POST['key'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['status']         = "Username or Password is invalid";
        $_SESSION['status_info']    = "danger";
            echo "<script>document.location=\"$site_url/login/\"</script>";
    } else {
        // Variabel username dan password
        $username   = $_POST['username'];
        $password   = md5($_POST['password']);
        $queryuser  = mysqli_query($host,"SELECT * FROM users WHERE email='$username'");
        $rows1      = mysqli_num_rows($queryuser);
        if ($rows1 < 1) {
            $_SESSION['status']="Email tidak terdaftar";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/login/\"</script>";
        }
        if ($rows = 1) {
            $query      = mysqli_query($host,"SELECT * FROM users WHERE pass='$password' AND email='$username'");
            $rows       = mysqli_num_rows($query);
            $data_user  = mysqli_fetch_array($query);
        }
        if ($rows == 1) {
            $_SESSION['login_user'] = $data_user['id_user']; // Membuat Sesi/session
            $_SESSION['email']      = $data_user['email']; // Membuat Sesi/session
            $_SESSION['kel']        = $data_user['kel'];
            header("location: $site_url/dashboard/"); // Mengarahkan ke halaman profil
        }
        if ($rows < 1) {
            $_SESSION['status']="Maaf kombinasi username dan pasword tidak sesuai";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/login/\"</script>";
        }

        mysql_close($host); // Menutup koneksi
    }
}

?>

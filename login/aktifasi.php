<?php
include("../auth/koneksi.php");
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
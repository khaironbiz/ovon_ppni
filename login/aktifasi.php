<?php
include("../auth/koneksi.php");
if(isset($_GET['key'])){
    $key        = $_GET['key'];
    $sql_key    = mysqli_query($host,"SELECT * FROM users WHERE has_user='$key'");
    $count_key  = mysqli_num_rows($sql_key);
    if($count_key >0 ){
        $aktif_user = mysqli_query($host,"UPDATE users SET status = '1' WHERE has_user='$key'");
        $_SESSION['status']="Selamat akun anda telah aktif";
        $_SESSION['status_info']="success";
        echo "<script> alert(\"Selamat akun anda telah aktif\")</script>";
        echo "<script>document.location=\"$site_url/login/\"</script>";
    }else{
        $_SESSION['status']="Maaf...!!!! aktifasi akun gagal";
        $_SESSION['status_info']="danger";
        
        echo "<script> alert(\"Maaf...!!!! aktifasi akun gagal\")</script>";
        echo "<script>document.location=\"$site_url/login/\"</script>";
    }
};
    

?>
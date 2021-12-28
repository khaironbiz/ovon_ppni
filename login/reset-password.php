<?php
include("../auth/koneksi.php");
$key        = $_GET['id'];
$time       = date("Y-m-d H:i:s");
$hari_ini   = date('Y-m-d');
$sql_key    = mysqli_query($host, "SELECT * FROM users WHERE kode_aktifasi='$key' and berlaku_key >'$time'");
$count_key  = mysqli_num_rows($sql_key);
if($count_key>0){
    $data_user  = mysqli_fetch_array($sql_key);
    $judul      = "Reset Password";
    $template   = "../theme/login.php";
    $wrapp      = "../core/wraper-login.php";
    $content    = "../views/login/reset-password.php";
    include($template);
}else{
    $_SESSION['status']="Invalid Token";
    $_SESSION['status_info']="danger";
    echo "<script>document.location=\"$site_url/login/\"</script>";
}
?>
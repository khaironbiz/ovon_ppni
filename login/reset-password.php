<?php
include("../auth/koneksi.php");
$key        = $_GET['id'];
$time       = date("y-m-d H:i:s");
$hari_ini   = date('Y-m-d');
$sql_key    = mysqli_query($host, "SELECT * FROM users WHERE kode_aktifasi='$key' and berlaku_key >'$hari_ini'");
$count_key  = mysqli_num_rows($sql_key);
if($count_key>0){
    $data_user  = mysqli_fetch_array($sql_key);
}else{
    echo "<script>document.location=\"$site_url/login/\"</script>";
}
$judul      = "Reset Password";
$template   = "../theme/login.php";
$wrapp      = "../core/wraper-login.php";
$content    = "../views/login/reset-password.php";
include($template);



?>
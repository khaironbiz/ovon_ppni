<?php
include("../auth/session.php");
if(isset($_GET['key'])){
    $key            = $_GET['key'];
    $sql_anggota    = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE has_keluarga_anggota='$key'");
    $count_anggota  = mysqli_num_rows($sql_anggota);
    $data_anggota   = mysqli_fetch_array($sql_anggota);
    $judul          = $data_anggota['nama_anggota'];
}else{
    $judul          = "Master Pengkajian Keluarga";
}

$template       = "../theme/table-simple.php";
$wrapp          = "../core/wrapp.php";
$content        = "../views/pengkajian/keluarga/index.php";
include($template);
?>
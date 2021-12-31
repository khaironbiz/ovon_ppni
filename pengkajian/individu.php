<?php
include("../auth/session.php");
include("../function/jawaban.php");
$key            = $_GET['key'];
$sql_anggota    = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE has_keluarga_anggota='$key'");
$count_anggota  = mysqli_num_rows($sql_anggota);
if($count_anggota){
$data_anggota   = mysqli_fetch_array($sql_anggota);
$judul          = $data_anggota['nama_anggota'];
$tgl_now        = date('Y-m-d');
$lahir          = new DateTime($data_anggota['tgl_lahir']);
$today          = new DateTime();
$umur           = $today->diff($lahir);
$sex            = $data_anggota['jenis_kelamin'];
}else{
$judul          = "Pengkajian Individu";
}

$template       = "../theme/table-simple.php";
$wrapp          = "../core/wrapp.php";
$content        = "../views/pengkajian/pengkajian-anggota.php";
include($template);
?>
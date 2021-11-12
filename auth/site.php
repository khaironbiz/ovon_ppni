<?php
$site_server        = 2;
if($site_server ==1){
$site_url           = "http://localhost/ovon_ppni/";
?>
<script src="../assets/js/site_local.js"></script>
<?php
}if($site_server ==2){
$site_url           = "https://ppni.or.id/ovon/";
?>
<script src="../assets/js/site_server.js"></script>
<?php
}
$nama_web           = "OVON";
$nama_perusahaan    = "Satu Desa Satu Perawat";
$alamat_perusahaan  = "Jl. MT Haryono Kavling 11 Cawang, Jakarta Timur, DKI Jakarta 13630";
$deskripsi_web      = "Sistem Informasi Manajemen Anggota";
$version_web        = "2.0.0";
$time               = "Y-m-d H:i:s";
$date               = "Y-m-d";
?>


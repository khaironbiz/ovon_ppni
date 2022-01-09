<?php
if($_SERVER['SERVER_NAME']=='localhost'){
    $site_url           = "http://localhost/ovon_ppni/admin";
    $db                 = 1;
}else{
    $site_url           = "https://nurse.my.id/admin";
    $db                 = 2;
}
$nama_web           = "OVON";
$nama_perusahaan    = "Satu Desa Satu Perawat";
$alamat_perusahaan  = "Jl. MT Haryono Kavling 11 Cawang, Jakarta Timur, DKI Jakarta 13630";
$deskripsi_web      = "Sistem Informasi Manajemen Anggota";
$version_web        = "2.0.0";
$time               = "Y-m-d H:i:s";
$date               = "Y-m-d";
?>
<script>
    var base_url = "<?= $site_url?>";
</script>


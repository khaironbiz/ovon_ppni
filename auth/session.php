<?php

include("koneksi.php");
include("site.php");
session_start();
if(isset($_SESSION['login_user'])){
$user_check     = $_SESSION['login_user'];
$sql_pengguna   = mysqli_query($host,"SELECT * FROM users WHERE id_user = '$user_check'");
$data_pengguna  = mysqli_fetch_array($sql_pengguna);
$mydesa         = $data_pengguna['kel'];
$sql_my_desa    = mysqli_query($host,"SELECT * FROM id_desa WHERE lokasi_kelurahan='$mydesa'");
$data_desa      = mysqli_fetch_array($sql_my_desa);
//kecamatan
$mykecamatan    = $data_pengguna['kec'];
$sql_my_kec     = mysqli_query($host,"SELECT * FROM id_desa WHERE lokasi_kecamatan='$mykecamatan' and lokasi_kelurahan='0'");
$data_kec       = mysqli_fetch_array($sql_my_kec);
//kota
$mykota         = $data_pengguna['kota'];
$sql_my_kota    = mysqli_query($host,"SELECT * FROM id_desa WHERE 
                    lokasi_kabupatenkota    = '$mykota' and 
                    lokasi_kecamatan        = '0' and 
                    lokasi_kelurahan        = '0'");
$data_kota      = mysqli_fetch_array($sql_my_kota);
//prov
$myprov         = $data_pengguna['prov'];
$sql_my_prov    = mysqli_query($host,"SELECT * FROM id_desa WHERE 
                    lokasi_propinsi         = '$myprov' and
                    lokasi_kabupatenkota    = '0' and 
                    lokasi_kecamatan        = '0' and 
                    lokasi_kelurahan        = '0'");
$data_prov      = mysqli_fetch_array($sql_my_prov);
}else{
echo "<script>document.location=\"$site_url/login\"</script>";
}

?>
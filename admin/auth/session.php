<?php

include("koneksi.php");
include("site.php");
session_start();
if(isset($_SESSION['login_user'])){
$user_check     = $_SESSION['login_user'];
$sql_pengguna   = mysqli_query($host,"SELECT * FROM users 
                    JOIN user_level on user_level.wilayah_akses = users.wilayah_akses 
                    JOIN 2020_provinsi on 2020_provinsi.provinsi = users.prov
                    JOIN 2020_kabupaten on 2020_kabupaten.kabupaten = users.kota
                    JOIN 2020_kecamatan on 2020_kecamatan.kecamatan = users.kec
                    JOIN 2020_desa on 2020_desa.desa = users.kel
                    WHERE users.id_user = '$user_check'");
$data_pengguna  = mysqli_fetch_array($sql_pengguna);
$mydesa         = $data_pengguna['kel'];
$mykecamatan    = $data_pengguna['kec'];
$mykabupaten    = $data_pengguna['kota'];
$myprovinsi     = $data_pengguna['prov'];

}else{
echo "<script>document.location=\"$site_url/login\"</script>";
}

?>
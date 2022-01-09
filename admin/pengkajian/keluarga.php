<?php
include("../auth/session.php");
include("../function/jawaban.php");
if(isset($_GET['key'])){
    $key            = $_GET['key'];
    $sql_keluarga   = mysqli_query($host,"SELECT * FROM keluarga WHERE key_keluarga='$key'");
    $count_keluarga = mysqli_num_rows($sql_keluarga);
    if($count_keluarga < 1 ){
        $judul          = "Page Not Found";
        $template       = "../theme/table-simple.php";
        $wrapp          = "../core/wrapp.php";
        $content        = "../views/page/not-found.php";
    }else{
        $data_keluarga  = mysqli_fetch_array($sql_keluarga);
        $judul          = "Pengkajian Keluarga ".$data_keluarga['nama_keluarga'];
        $sql_anggota    = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE key_keluarga='$key' AND id_struktur_keluarga='285'");
        $data_anggota   = mysqli_fetch_array($sql_anggota);
        $tgl_lahir      = $data_anggota['tgl_lahir'];
        $template       = "../theme/table-simple.php";
        $wrapp          = "../core/wrapp.php";
        $content        = "../views/pengkajian/create-keluarga.php";
    }
}else{
    $judul          = "Page Not Found";
    $template       = "../theme/table-simple.php";
    $wrapp          = "../core/wrapp.php";
    $content        = "../views/page/not-found.php";
}
include($template);
?>
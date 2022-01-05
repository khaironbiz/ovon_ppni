<?php
include("../auth/session.php");
include("../function/jawaban.php");
include("../function/usia.php");
if(isset($_GET['key'])){
    $key            = $_GET['key'];
    $sql_anggota    = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE has_keluarga_anggota='$key'");
    $count_anggota  = mysqli_num_rows($sql_anggota);
    if($count_anggota >0){
        $data_anggota   = mysqli_fetch_array($sql_anggota);
        $judul          = $data_anggota['nama_anggota'];
        $umur           = usia($data_anggota['tgl_lahir']);
        $sex            = $data_anggota['jenis_kelamin'];
        $template       = "../theme/table-simple.php";
        $wrapp          = "../core/wrapp.php";
        $content        = "../views/pengkajian/pengkajian-anggota.php";
        }else{
            $judul      = "Pengkajian Individu";
            $judul      = "Page Not Found";
            $template   = "../theme/table-simple.php";
            $wrapp      = "../core/wrapp.php";
            $content    = "../views/page/not-found.php";
        }
}else{
    $judul      = "Pengkajian Individu";
    $judul      = "Page Not Found";
    $template   = "../theme/table-simple.php";
    $wrapp      = "../core/wrapp.php";
    $content    = "../views/page/not-found.php";
}

include($template);
?>
<?php
include("../auth/session.php");
if(isset($_GET['id'])){
$key        = $_GET['id'];
$sql_kel    = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE has_keluarga_anggota='$key'");
$data_kel   = mysqli_fetch_assoc($sql_kel);
    if($data_kel['has_keluarga_anggota'] = NULL){
            $judul  = "Judul Awal";
        }else{
            $judul      = "Data Anggota :  ".$data_kel['nama_anggota'];
            
        }
}
$template   = "../theme/table-simple.php";
$wrapp      = "../core/wrapp.php";
$content    = "../views/data/anggota-detail.php";
include($template);



?>
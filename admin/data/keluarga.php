<?php
include("../auth/session.php");
include("../function/jawaban.php");
if(isset($_GET['id'])){
    $key        = $_GET['id'];
    $sql_kel    = mysqli_query($host,"SELECT * FROM keluarga WHERE key_keluarga='$key'");
    $count_kel  = mysqli_num_rows($sql_kel);
    if($count_kel>0){
        $data_kel   = mysqli_fetch_assoc($sql_kel);
        $judul      = "Data Keluarga ".$data_kel['nama_keluarga'];
        $template   = "../theme/table-simple.php";
        $wrapp      = "../core/wrapp.php";
        $content    = "../views/data/keluarga.php";
        }else{
        $judul      = "Page Not Found";
        $template   = "../theme/table-simple.php";
        $wrapp      = "../core/wrapp.php";
        $content    = "../views/page/not-found.php";
    }
}else{
    $judul      = "Page Not Found";
    $template   = "../theme/table-simple.php";
    $wrapp      = "../core/wrapp.php";
    $content    = "../views/page/not-found.php";
}

include($template);



?>
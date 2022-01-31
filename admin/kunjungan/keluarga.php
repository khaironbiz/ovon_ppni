<?php
include("../auth/session.php");
include("../function/function.php");
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
        echo "Koneksi Berhasil";
    }
}else{
    $judul          = "Page Not Found";
    $template       = "../theme/table-simple.php";
    $wrapp          = "../core/wrapp.php";
    $content        = "../views/page/not-found.php";
}
include($template);
?>
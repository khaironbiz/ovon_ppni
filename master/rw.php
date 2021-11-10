<?php
include("../auth/session.php");
$judul      = "Master RW Kelurahan : ".$data_desa['lokasi_nama'];
$template   = "../theme/table-simple.php";
$wrapp      = "../core/wrapp.php";
$content    = "../views/master/rw.php";
include($template);



?>
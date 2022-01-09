<?php
include("../auth/session.php");
$judul      = "Master RW Kelurahan : ".$data_pengguna['nama_desa'];
$template   = "../theme/table-simple.php";
$wrapp      = "../core/wrapp.php";
$content    = "../views/master/rw.php";
include($template);



?>
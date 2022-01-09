<?php
include("../auth/session.php");
$has_master_soal=$_GET['key'];
$sql_soal   = mysqli_query($host,"SELECT * FROM master_soal WHERE has_master_soal='$has_master_soal'");
$soal       = mysqli_fetch_array($sql_soal);
$judul      = $soal['master_soal'];
$template   = "../theme/table-simple.php";
$wrapp      = "../core/wrapp.php";
$content    = "../views/soal/edit.php";
include($template);



?>
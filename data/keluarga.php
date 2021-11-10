<?php
include("../auth/session.php");
$key        = $_GET['id'];
$sql_kel    = mysqli_query($host,"SELECT * FROM keluarga WHERE key_keluarga='$key'");
$data_kel   = mysqli_fetch_assoc($sql_kel);
$judul      = "Data Keluarga ".$data_kel['nama_keluarga'];
$template   = "../theme/table-simple.php";
$wrapp      = "../core/wrapp.php";
$content    = "../views/data/keluarga.php";
include($template);



?>
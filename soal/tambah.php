<?php
include("../auth/session.php");
$key                = $_GET['id'];
$sql_master_rumpun  = mysqli_query($host,"SELECT * FROM master_rumpun WHERE has_master_rumpun='$key'");
$master_rumpun      = mysqli_fetch_array($sql_master_rumpun);
$judul              = $master_rumpun['master_rumpun'];
$template           = "../theme/table-simple.php";
$wrapp              = "../core/wrapp.php";
$content            = "../views/soal/add-soal.php";
include($template);



?>
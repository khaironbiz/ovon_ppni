<?php
function master_soal($id_master_soal){
   include('../auth/koneksi.php');
   $sql_soal      = mysqli_query($host,"SELECT * FROM master_soal WHERE id_master_soal = '$id_master_soal'");
   $data_soal     = mysqli_fetch_array($sql_soal);
   $master_soal   = $data_soal['master_soal'];
   return $master_soal;
};
$id_master_soal   = 7;
//echo master_soal($id_master_soal);
?>

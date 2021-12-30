<?php
function master_jawaban($id_master_jawaban){
   include('../auth/koneksi.php');
   $sql_jawaban      = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_jawaban = '$id_master_jawaban'");
   $data_jawaban     = mysqli_fetch_array($sql_jawaban);
   $master_jawaban   = $data_jawaban['master_jawaban'];
   return $master_jawaban;
};
$id_master_jawaban   = 7;
//echo master_jawaban($id_master_jawaban);
?>

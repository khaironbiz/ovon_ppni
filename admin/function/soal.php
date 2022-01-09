<?php
function master_soal($id_master_soal){
   include('../auth/koneksi.php');
   $sql_soal      = mysqli_query($host,"SELECT * FROM master_soal WHERE id_master_soal = '$id_master_soal'");
   $data_soal     = mysqli_fetch_array($sql_soal);
   $master_soal   = $data_soal['master_soal'];
   return $master_soal;
}
function jawaban($jenis_input_jawaban){
    include('../auth/koneksi.php');
    $sql      = mysqli_query($host,"SELECT * FROM jenis_input_jawaban WHERE id_jenis_input_jawaban = '$jenis_input_jawaban'");
    $data     = mysqli_fetch_array($sql);
    $master   = $data['jenis_input_jawaban'];
    return $master;
}

?>

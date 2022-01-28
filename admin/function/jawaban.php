<?php
function master_jawaban($id_master_jawaban){
   include('../auth/koneksi.php');
   $sql_jawaban      = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_jawaban = '$id_master_jawaban'");
   $data_jawaban     = mysqli_fetch_array($sql_jawaban);
   $master_jawaban   = $data_jawaban['master_jawaban'];
   return $master_jawaban;
}
function count_jawaban($id_master_jawaban){
   include('../auth/koneksi.php');
   $sql_jawaban      = mysqli_query($host,"SELECT * FROM master_jawaban WHERE id_master_jawaban = '$id_master_jawaban'");
   $count_jawaban    = mysqli_num_rows($sql_jawaban);
   return $count_jawaban;
}
function imt($imt){
   if($imt <40){
      $keterangan = "Gemuk";
   }if($imt <30){
      $keterangan = "Berat Badan Lebih";
   }if($imt <25){
      $keterangan = "Berat Badan Ideal";
   }if($imt <18.5){
      $keterangan = "Berat Badan Kurang";
   }if($imt >=40){
      $keterangan = "Sangat Gemuk";
   }
  
   return $keterangan;
}
?>

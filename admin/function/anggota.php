<?php
function get_anggota_byid($id_anggota){
   include('../auth/koneksi.php');
   $sql         = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE id_keluarga_anggota = '$id_anggota'");
   $data        = mysqli_fetch_array($sql_soal);
   $anggota     = $data['nama_anggota'];
   return $anggota;
}
function count_anggota_byrt($id_rt){
   include('../auth/koneksi.php');
   $sql         = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE rt = '$id_rt'");
   $data        = mysqli_num_rows($sql_soal);
   $anggota     = $data;
   return $anggota;
}


?>

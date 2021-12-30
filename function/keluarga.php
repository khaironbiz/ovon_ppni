<?php
function master_soal($id_master_soal){
    include('../auth/koneksi.php');
    $sql_soal      = mysqli_query($host,"SELECT * FROM keluarga WHERE id_master_soal = '$id_master_soal'");
    $data_soal     = mysqli_fetch_array($sql_soal);
    $master_soal   = $data_soal['master_soal'];
    return $master_soal;
}
function nama_keluarga($key_keluarga){
    include('../auth/koneksi.php');
    $sql_keluarga      = mysqli_query($host,"SELECT * FROM keluarga WHERE key_keluarga = '$key_keluarga'");
    $data_keluarga     = mysqli_fetch_array($sql_keluarga);
    $master_keluarga   = $data_keluarga['nama_keluarga'];
    return $master_keluarga;
}
?>

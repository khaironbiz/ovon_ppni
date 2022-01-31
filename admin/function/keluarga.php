<?php
function key_keluarga($id_keluarga){
    include('../auth/koneksi.php');
    $sql            = mysqli_query($host,"SELECT * FROM keluarga WHERE id_keluarga = '$id_keluarga'");
    $data           = mysqli_fetch_array($sql);
    $key_keluarga   = $data['key_keluarga'];
    return $key_keluarga;
}
function nama_keluarga($key_keluarga){
    include('../auth/koneksi.php');
    $sql_keluarga      = mysqli_query($host,"SELECT * FROM keluarga WHERE key_keluarga = '$key_keluarga'");
    $data_keluarga     = mysqli_fetch_array($sql_keluarga);
    $master_keluarga   = $data_keluarga['nama_keluarga'];
    return $master_keluarga;
}
function kepala_keluarga($nik){
    include('../auth/koneksi.php');
    $sql_keluarga      = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE nik = '$nik'");
    $data_keluarga     = mysqli_fetch_array($sql_keluarga);
    $master_keluarga   = $data_keluarga['nama_anggota'];
    return $master_keluarga;
}

?>

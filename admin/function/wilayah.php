<?php
function provinsi($id_provinsi){
    include('../auth/koneksi.php');
    $sql         = mysqli_query($host,"SELECT * FROM 2020_provinsi WHERE provinsi = '$id_provinsi'");
    $data        = mysqli_fetch_array($sql);
    $provinsi    = $data['nama_provinsi'];
    return $provinsi;
}
function kabupaten($id_kabupaten){
    include('../auth/koneksi.php');
    $sql         = mysqli_query($host,"SELECT * FROM 2020_kabupaten WHERE kabupaten = '$id_kabupaten'");
    $data        = mysqli_fetch_array($sql);
    $kabupaten   = $data['nama_kabupaten'];
    return $kabupaten;
}
function kecamatan($id_kecamatan){
    include('../auth/koneksi.php');
    $sql         = mysqli_query($host,"SELECT * FROM 2020_kecamatan WHERE kecamatan = '$id_kecamatan'");
    $data        = mysqli_fetch_array($sql);
    $kecamatan   = $data['nama_kecamatan'];
    return $kecamatan;
}
function desa($id_desa){
    include('../auth/koneksi.php');
    $sql        = mysqli_query($host,"SELECT * FROM 2020_desa WHERE desa = '$id_desa'");
    $data       = mysqli_fetch_array($sql);
    $desa       = $data['nama_desa'];
    return $desa;
}
function rw($id_rw){
    include('../auth/koneksi.php');
    $sql        = mysqli_query($host,"SELECT * FROM rw WHERE id_rw = '$id_rw'");
    $data       = mysqli_fetch_array($sql);
    $data_rw    = $data['nama_rw'];
    return $data_rw;
}
// $id_desa   = 1101012001;
// echo desa($id_desa)
?>

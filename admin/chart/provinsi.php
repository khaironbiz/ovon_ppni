<?php
include('../auth/koneksi.php');
$sql    = mysqli_query($host, "SELECT * FROM provinsi order by nama_provinsi ASC");
while($data     = mysqli_fetch_array($sql)){
    $nilai= json_encode($data['nama_provinsi']);
    echo $nilai;
}
?>
<?php
include("../koneksi.php");
?>
<table>
    <tr>
        <th>No</th>
        <th>Kode Provinsi</th>
        <th>Nama Provinsi</th>
    </tr>
    <?php
    $no=1;
    $sql    = mysqli_query($host,"SELECT * FROM id_desa WHERE lokasi_kecamatan !='0'and lokasi_kelurahan='0' and has_wilayah='' LIMIT 1");
    while($data= mysqli_fetch_array($sql)){
    ?>
    <tr>
    <td><?= $no++?></td>
    <td><?= $data['lokasi_propinsi']?></td>
    <td><?= addslashes($data['lokasi_nama'])?></td>
    </tr>
    
    <?php
    $id                 = $data['id'];
    $id_provinsi        = $data['lokasi_propinsi'];
    $nama_provinsi      = $data['lokasi_nama'];
    
    $id_kabupaten       = $data['lokasi_kabupatenkota'];
    $nama_kabupaten     = $data['lokasi_nama'];

    $id_kecamatan       = $data['lokasi_kecamatan'];
    $nama_kecamatan     = addslashes($data['lokasi_nama']);
    $has_wilayah        = md5(uniqid());
    $migrasi            = mysqli_query($host,"INSERT INTO kecamatan SET 
                        id_provinsi     = '$id_provinsi',
                        id_kabupaten    = '$id_kabupaten', 
                        id_kecamatan    = '$id_kecamatan',
                        nama_kecamatan  = '$nama_kecamatan',
                        has_kecamatan   = '$has_wilayah'");
    if($migrasi ){
        $update = mysqli_query($host, "UPDATE id_desa SET has_wilayah = '$has_wilayah' WHERE id='$id'");
    }    
    if($update){
        echo "<script>document.location=\"http://localhost/auth/wilayah/kecamatan.php\"</script>";
        
    }
    }
    ?>
</table>
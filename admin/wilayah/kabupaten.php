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
    $sql    = mysqli_query($host,"SELECT * FROM id_desa WHERE lokasi_kabupatenkota !='0'and lokasi_kecamatan='0' and has_wilayah='' LIMIT 1");
    while($data= mysqli_fetch_array($sql)){
    ?>
    <tr>
    <td><?= $no++?></td>
    <td><?= $data['lokasi_propinsi']?></td>
    <td><?= $data['lokasi_nama']?></td>
    </tr>
    
    <?php
    $id             = $data['id'];
    $id_provinsi    = $data['lokasi_propinsi'];
    $nama_provinsi  = $data['lokasi_nama'];
    
    $id_kabupaten    = $data['lokasi_kabupatenkota'];
    $nama_kabupaten  = $data['lokasi_nama'];
    $has_wilayah    = md5(uniqid());
    $migrasi    = mysqli_query($host,"INSERT INTO kabupaten SET 
                    id_provinsi     ='$id_provinsi',
                    id_kabupaten     ='$id_kabupaten', 
                    nama_kabupaten   ='$nama_kabupaten',
                    has_kabupaten    = '$has_wilayah'");
    if($migrasi ){
        $update = mysqli_query($host, "UPDATE id_desa SET has_wilayah = '$has_wilayah' WHERE id='$id'");
    }    
    if($update){
        echo "<script>document.location=\"http://localhost/auth/wilayah/kabupaten.php\"</script>";
        
    }
    }
    ?>
</table>
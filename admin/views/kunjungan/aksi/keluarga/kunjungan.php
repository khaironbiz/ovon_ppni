<?php
if(isset($_POST['kunjungan_keluarga'])){
    $key_keluarga   = $_POST['kunjungan_keluarga'];
    $tgl_kunjungan  = $_POST['tgl_kunjungan'];
    $jam_ini        = date('Y-m-d H:i:s');
    $sql_kunjungan  = mysqli_query($host,"SELECT * FROM keluarga WHERE key_keluarga='$key_keluarga'");
    $count_keluarga = mysqli_num_rows($sql_kunjungan);
    $data_ini       = mysqli_fetch_array($sql_kunjungan);
    $has_kunjungan  = md5(uniqid());
    $id_keluarga    = $data_ini['id_keluarga'];
    if($count_keluarga >0){
        $sql_tgl    = mysqli_query($host,"SELECT * FROM kunjungan_keluarga WHERE tgl_kunjungan='$tgl_kunjungan' and id_keluarga='$id_keluarga'");
        $count_tgl  = mysqli_num_rows($sql_tgl);
        if($count_tgl <1 ){
            $kunjungan_baru = mysqli_query($host,"INSERT INTO kunjungan_keluarga SET
            tgl_kunjungan           = '$tgl_kunjungan',
            id_keluarga             = '$id_keluarga',
            created_by              = '$user_check',
            created_at              = '$jam_ini',
            has_kunjungan_keluarga  = '$has_kunjungan'");
            if($kunjungan_baru){
                $_SESSION['status']="Data Sukses Disimpan";
                $_SESSION['status_info']="success";
                echo "<script>document.location=\"$site_url/kunjungan/keluarga.php?key=$key_keluarga\"</script>";
            }else{
                $_SESSION['status']="Data Gagagl Disimpan";
                $_SESSION['status_info']="danger";
                echo "<script>document.location=\"$site_url/kunjungan/keluarga.php?key=$key_keluarga\"</script>";
            }
        }else{
            $_SESSION['status']="Data Gagagl Disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/kunjungan/keluarga.php?key=$key_keluarga\"</script>";
        }
    }
}
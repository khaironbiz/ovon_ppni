<?php
if(isset($_POST['add_master_soal'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_soal        = $_POST['master_soal'];
    $key_back           = $_POST['key_back'];
    $nomor_urut         = $_POST['nomor_urut'];
    $jenis_input_jawaban= $_POST['jenis_input_jawaban'];
    $has_master_soal    = md5(uniqid());
    $sql_master_rumpun  = mysqli_query($host,"SELECT * FROM master_rumpun WHERE has_master_rumpun='$key_back'");
    $master_rumpun      = mysqli_fetch_array($sql_master_rumpun);
    $id_master_rumpun   = $master_rumpun['id_master_rumpun'];
    $sql_master_soal    = mysqli_query($host, "SELECT * FROM master_soal WHERE master_soal='$master_soal'");
    $count              = mysqli_num_rows($sql_master_soal);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_soal SET 
                            id_master_rumpun    = '$id_master_rumpun',
                            master_soal         = '$master_soal',
                            nomor_urut          = '$nomor_urut',
                            jenis_input_jawaban = '$jenis_input_jawaban',
                            created_at          = '$hari_ini',
                            created_by          = '$user_check',
                            has_master_soal     = '$has_master_soal'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/soal/tambah.php?id=$key_back\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/soal/tambah.php?id=$key_back\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/soal/tambah.php?id=$key_back\"</script>";

    }
}
?>
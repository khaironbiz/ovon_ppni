<?php
if(isset($_POST['add_master_jawaban'])){
    $hari_ini               = date('Y-m-d H:i:s');
    $has_master_soal        = $_POST['add_master_jawaban'];
    $sql_master_soal_ini    = mysqli_query($host,"SELECT * FROM master_soal WHERE has_master_soal='$has_master_soal'");
    $data_master_soal_ini   = mysqli_fetch_array($sql_master_soal_ini);
    $count_has_soal         = mysqli_num_rows($sql_master_soal_ini);
    $id_master_soal         = $data_master_soal_ini['id_master_soal'];
    $id_master_rumpun       = $data_master_soal_ini['id_master_rumpun'];
    $master_jawaban         = $_POST['master_jawaban'];
    $nomor_urut             = $_POST['nomor_urut'];
    $has_master_jawaban     = md5(uniqid());
    if($count_has_soal > 0 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_jawaban SET 
                            id_master_rumpun    = '$id_master_rumpun',
                            id_master_soal      = '$id_master_soal',
                            master_jawaban      = '$master_jawaban',
                            nomor_urut          = '$nomor_urut',
                            created_at          = '$hari_ini',
                            created_by          = '$user_check',
                            has_master_jawaban  = '$has_master_jawaban'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/soal/edit.php?key=$has_master_soal\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/soal/edit.php?key=$has_master_soal\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/soal/edit.php?key=$has_master_soal\"</script>";

    }
}
?>
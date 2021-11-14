<?php
if(isset($_POST['add_bpjs'])){
    $hari_ini           = date('Y-m-d H:i:s');
    $master_bpjs= $_POST['master_bpjs'];
    $has                = md5(uniqid());
    $sql                = mysqli_query($host, "SELECT * FROM master_bpjs WHERE master_bpjs ='$master_bpjs'");
    $count              = mysqli_num_rows($sql);
    if($count < 1 ){
        $input_data     = mysqli_query($host, "INSERT INTO master_bpjs SET 
                            master_bpjs     = '$master_bpjs',
                            created_at      = '$hari_ini',
                            created_by      = '$user_check',
                            has_master_bpjs = '$has'");
        if($input_data){
            $_SESSION['status']="Data berhasil disimpan";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/master/bpjs.php\"</script>";
        }else{
            $_SESSION['status']="Data gagal disimpan";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/master/bpjs.php\"</script>";
        }
    }else{
        $_SESSION['status']="Data gagal disimpan karena data sudah terdaftar di sistem";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/master/bpjs.php\"</script>";

    }
}
?>
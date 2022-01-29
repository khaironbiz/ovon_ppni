<?php
if(isset($_POST['edit_biodata'])){
$nama       = $_POST['nama'];
$nik        = $_POST['nik'];
$email      = $_POST['email'];
$nira       = $_POST['nira'];
$hp         = $_POST['hp'];
$hari_ini   = date('Y-m-d H:i:s');
$sql_nik    = mysqli_query($host,"SELECT * FROM users WHERE nik='$nik'");
$count_nik  = mysqli_num_rows($sql_nik);
if(!empty($nik)){
    $update_data    = mysqli_query($host,"UPDATE users SET 
                            user_nama   = '$nama',
                            nik         = '$nik',
                            email       = '$email',
                            updated_at  = '$hari_ini',
                            nira        = '$nira',
                            hp          = '$hp' WHERE id_user ='$user_check'");
    if($update_data){
        $_SESSION['status']="Data berhasil disimpan";
        $_SESSION['status_info']="success";
        echo "<script>document.location=\"$site_url/profile\"</script>";
    }else{
        $_SESSION['status']="Data gagal disimpan";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/profile\"</script>";
    }
    }else{
        $_SESSION['status']="Data gagal disimpan : NIK sudah terdaftar";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/profile\"</script>";
    }
}

?>
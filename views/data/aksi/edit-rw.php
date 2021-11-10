<?php
if(isset($_POST['edit_rw'])){
    $rw     = $_POST['prop'];
    $rt     = $_POST['kota'];
    $update = mysqli_query($host, "UPDATE users SET id_rw='$rw', id_rt='$rt' WHERE id_user='$user_check'");
    if($update){
        $_SESSION['status']="Data berhasil dirubah";
        $_SESSION['status_info']="success";
        echo "<script>document.location=\"$site_url/data/\"</script>";
    }else{
    $_SESSION['status']="Data gagal dirubah";
    $_SESSION['status_info']="danger";
    echo "<script>document.location=\"$site_url/data/\"</script>";
    }
}
<?php
if(isset($_POST['forgot_password'])){
    $email          = $_POST['username'];
    $kode_aktifasi  = uniqid();
    $time           = date("Y-m-d H:i:s");
    $sql_email      = mysqli_query($host,"SELECT * FROM users WHERE email ='$email'");
    $count_email    = mysqli_num_rows($sql_email);
    $url_reset      = $site_url."/login/reset-password.php?id=".$kode_aktifasi;
    $link_riset     = "<a href='$url_reset'>Reset</a>";
    if($count_email>0){
    $update_user    = mysqli_query($host, "UPDATE users SET
                        kode_aktifasi   = '$kode_aktifasi',
                        updated_at      = '$time' WHERE
                        email           = '$email'");
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from       = "admin@ppni.or.id";
        $to         = $email;
        $subject    = "Reset Password";
        $message    = "Silahkan klik url berikut ".$url_reset;
        $headers    = "From:" . $from;
        $send_email = mail($to,$subject,$message, $headers);
        if($send_email){
        $_SESSION['status']     ="Request success";
        $_SESSION['status_info']="success";
        echo "<script>document.location=\"$site_url/login/\"</script>";
        }else{
        $_SESSION['status']="Fail request";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/login/\"</script>";
        }
        
    }
}


<?php
if(isset($_POST['reset_password'])){
    $email          = $_POST['email'];
    $kode_aktifasi  = $_POST['reset_password'];
    $time           = date("Y-m-d H:i:s");
    $pass1          = $_POST['password1'];
    $pass2          = $_POST['password2'];
    if($pass1 == $pass2){
    $sql_email      = mysqli_query($host,"SELECT * FROM users WHERE email ='$email' and kode_aktifasi='$kode_aktifasi'");
    $count_email    = mysqli_num_rows($sql_email);
    }
    if($count_email>0){
    $update_user    = mysqli_query($host, "UPDATE users SET
                        pass            = '$kode_aktifasi',
                        updated_at      = '$time' WHERE
                        email           = '$email' AND 
                        kode_aktifasi   = '$kode_aktifasi'");
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from       = "admin@ppni.or.id";
        $to         = $email;
        $subject    = "Reset Password";
        $message    = "Password berhasil dirubah";
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


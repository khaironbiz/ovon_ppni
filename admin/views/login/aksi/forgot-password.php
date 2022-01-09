<?php

if(isset($_POST['forgot_password'])){
    $email          = $_POST['username'];
    $kode_aktifasi  = uniqid();
    $time           = date("Y-m-d H:i:s");
    $pinjam         = date("Y-m-d");
    $satu_hari      = mktime(0,0,0,date("n"),date("j")+1,date("Y"));
    $besok          = date("Y-m-d", $satu_hari);
    $exp_key        = $besok;
    $sql_email      = mysqli_query($host,"SELECT * FROM users WHERE email ='$email'");
    $count_email    = mysqli_num_rows($sql_email);
    $url_reset      = $site_url."/login/reset-password.php?id=".$kode_aktifasi;
    $link_riset     = "<a href='$url_reset'>Reset</a>";
    if($count_email<1){
        $_SESSION['status']="Fail request : email not found";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/login/forgot.php\"</script>";
    }else{
        $update_user    = mysqli_query($host, "UPDATE users SET
                            kode_aktifasi   = '$kode_aktifasi',
                            berlaku_key     = '$exp_key',
                            updated_at      = '$time' WHERE
                            email           = '$email'");
        $subject        = "Reset Password";
        $htmlContent    = ' 
            <h3>Reset Password</h3> 
            <p>Berikut tautan untuk reset password <a href="'.$url_reset.'">Reset Password</a>,abaikan email ini jika anda tidak melakukan permohonan reset password, mungkin ada seseorang yang berusaha menggunakan email anda untuk mengakses aplikasi kami. jika ada hal yang perlu dikonfirmasi silahkan hubungi Khairon 081213798746.</p> 
            <p>DPK PPNI RSPON</p>
            <p>Ini adalah email server mohon tidak membalas email ini</p>
        '; 
        $to             = $email;
        $from           = 'admin@ppni.or.id'; 
        $fromName       = 'DPK PPNI RSPON'; 
        // $file           = $download['file']; 
        $headers        = "From: $fromName"." <".$from.">"; 
        $semi_rand      = md5(time());  
        $mime_boundary  = "==Multipart_Boundary_x{$semi_rand}x";  
        $headers        .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
        $message        = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
        $send_email     = @mail($to, $subject, $message, $headers, $returnpath); 
        if($send_email){
            $_SESSION['status']     ="Request success";
            $_SESSION['status_info']="success";
            echo "<script>document.location=\"$site_url/login/forgot.php\"</script>";
            }else{
            $_SESSION['status']="Fail request : internal email server";
            $_SESSION['status_info']="danger";
            echo "<script>document.location=\"$site_url/login/forgot.php\"</script>";
            }
        }   
    }



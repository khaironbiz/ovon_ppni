<?php
if(isset($_POST['add_user'])){
    $user_nama      = $_POST['user_nama'];
    $email          = $_POST['email'];
    $password1      = $_POST['password1'];
    $password2      = $_POST['password2'];
    $password       = md5($password1);
    $kode_aktifasi  = uniqid();
    $has_user       = md5($kode_aktifasi);
    $time           = date("Y-m-d H:i:s");
    $date_ini       = date("Y-m-d");
    $secret_key     = $_POST['key'];
    $nik            = $_POST['nik'];
    //cek key apakah ada
    $sql_key_aja    = mysqli_query($host,"SELECT * FROM master_key WHERE master_key  ='$secret_key'");
    $count_key_aja  = mysqli_num_rows($sql_key_aja);
    //apakah key masih berlaku
    $sql_key        = mysqli_query($host,"SELECT * FROM master_key WHERE 
                            master_key  ='$secret_key' AND 
                            valid_until > '$date_ini'");
    $count_key      = mysqli_num_rows($sql_key);  
    //nilai dari data key
    $data_key       = mysqli_fetch_array($sql_key);
    $prov           = $data_key['prov'];
    $kota           = $data_key['kota'];
    $kecamatan      = $data_key['kecamatan'];
    $kelurahan      = $data_key['kelurahan'];
    $valid_until    = $data_key['valid_until'];
    $wilayah_akses  = $data_key['wilayah_akses'];
    $sql_email      = mysqli_query($host,"SELECT * FROM users WHERE email ='$email'");
    $count_email    = mysqli_num_rows($sql_email);

    if($password1 != $password2){
        $_SESSION['status']="Password tidak sama";
        $_SESSION['status_info']="danger";
        echo "<script>document.location=\"$site_url/login/register.php\"</script>";
        //echo "<script> alert(\"Password tidak sama\")</script>";
        //header("location: $site_url/login/register.php");
        }elseif($count_key_aja <1){
            $_SESSION['status']="key not found";
            $_SESSION['status_info']="danger";
            //echo "<script> alert(\"Password tidak sama\")</script>";
            header("location: $site_url/login/register.php");  
        }elseif($count_key <1){  
            $_SESSION['status']="key expired";
            $_SESSION['status_info']="danger";
            //echo "<script> alert(\"Password tidak sama\")</script>";
            header("location: $site_url/login/register.php");
        }elseif($count_email>0){
            $_SESSION['status']="Email already registered";
            $_SESSION['status_info']="danger";
            //echo "<script> alert(\"Password tidak sama\")</script>";
            header("location: $site_url/login/register.php"); 
            }else{
            $tambah_user = mysqli_query($host, "INSERT INTO users SET
                        user_nama       = '$user_nama',
                        nik             = '$nik',
                        email           = '$email',
                        prov            = '$prov',
                        kota            = '$kota',
                        kec             = '$kecamatan',
                        kel             = '$kelurahan',
                        pass            = '$password',
                        status          = '1',
                        kode_aktifasi   = '$kode_aktifasi',
                        created_at      = '$time',
                        secret_key      = '$secret_key',
                        aktif_sd        = '$valid_until',
                        wilayah_akses   = '$wilayah_akses',
                        has_user        = '$has_user'");
                if($tambah_user){
                    $subject        = "Aktifasi Akun";
                    $url            = $site_url."/login/aktifasi.php?key=".$has_user;
                    $htmlContent    = ' 
                        <h3>Aktifasi akun '.$user_nama.'</h3> 
                        <p>Terimakasih sudah registrasi, mohon klik tautan berikut untuk aktifasi akun <a href="'.$url.'">Aktifasi disini</a>, jika ada hal yang perlu dikonfirmasi silahkan hubungi Khairon 081213798746.</p> 
                        <p>DPK PPNI RSPON</p>
                        <p>Ini adalah email server mohon tidak membalas email ini</p>
                    '; 
                    $to             = $email;
                    $from           = 'admin@ppni.or.id'; 
                    $fromName       = 'DPK PPNI RSPON'; 
                    $file           = $download['file']; 
                    $headers        = "From: $fromName"." <".$from.">"; 
                    $semi_rand      = md5(time());  
                    $mime_boundary  = "==Multipart_Boundary_x{$semi_rand}x";  
                    $headers        .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    $message        = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
                    $mail   = @mail($to, $subject, $message, $headers, $returnpath);
                    if($mail){
                        $_SESSION['status']="Data berhasil disimpan";
                        $_SESSION['status_info']="success";
                        //echo "<script> alert(\"Data sukses disimpan pada sistem\")</script>";
                        echo "<script>document.location=\"$site_url/login/\"</script>";
                    }else{
                    $_SESSION['status']="Data gagal dikirim ke email";
                    $_SESSION['status_info']="danger";
                    //echo "<script> alert(\"Data gagal disimpan pada sistem\")</script>";
                    echo "<script>document.location=\"$site_url/login/\"</script>";
                        
                        }
                }else{
                    $_SESSION['status']="User gagal ditambah";
                    $_SESSION['status_info']="danger";
                    //echo "<script> alert(\"Data gagal disimpan pada sistem\")</script>";
                    echo "<script>document.location=\"$site_url/login/\"</script>";
                }
            }  
    }


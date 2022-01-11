<?php
    include "admin/auth/koneksi.php";
    if ($_POST['submit'] == "Upload") {
        $nama   = $_FILES['file_gambar']['name'];
        $size   = $_FILES['file_gambar']['size']; 
        $asal   = $_FILES['file_gambar']['tmp_name'];
        $format = pathinfo($nama, PATHINFO_EXTENSION);
        // setup ukuran lebar gambar (width), output ukuran gambar setelah diresize
        $width_size = 100;
        if ($format=="jpg" OR $format=="jpeg") {
            move_uploaded_file($asal, "img/".$nama);
            $asli           = "img/".$nama;
            $nama_baru      = "resize-".$nama;
            $gambar_asli    = imagecreatefromjpeg ($asli);
            $lebar_asli     = imageSX($gambar_asli);
            $tinggi_asli    = imageSY($gambar_asli);
            $pembagi        = $lebar_asli / $width_size;
            $lebar_baru     = $lebar_asli/$pembagi;
            $tinggi_baru    = $tinggi_asli/$pembagi;
            $img            = imagecreatetruecolor($lebar_baru, $tinggi_baru);
            imagecopyresampled($img, $gambar_asli, 0, 0, 0, 0, $lebar_baru, $tinggi_baru, $lebar_asli, $tinggi_asli);
            imagejpeg($img, "img/resize/" . $nama);
            imagedestroy($gambar_asli);
            imagedestroy($img);
            $insert         = mysqli_query ($host, "INSERT INTO tb_gambar (nama_original, nama_resize) VALUES ('$nama', '$nama_baru')");
            if($insert){
                ?>
                    <script language="JavaScript">
                        alert('Good! Upload and resize image success ...');
                        document.location='view-gambar.php';
                    </script>
                <?php
            }
            else {
                echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
            }
        }
        else if ($format=="png") {
            move_uploaded_file($asal, "img/".$nama);
            $asli           ="img/".$nama;
            $nama_baru      = "resize-".$nama;
            $gambar_asli    = imagecreatefrompng ($asli);
            $lebar_asli     = imageSX($gambar_asli);
            $tinggi_asli    = imageSY($gambar_asli);
            $pembagi        = $lebar_asli / $width_size;
            $lebar_baru     = $lebar_asli/$pembagi ;
            $tinggi_baru    = $tinggi_asli/$pembagi ;
            $img            = imagecreatetruecolor($lebar_baru, $tinggi_baru);
            imagecopyresampled($img, $gambar_asli, 0, 0, 0, 0, $lebar_baru, $tinggi_baru, $lebar_asli, $tinggi_asli);
            imagejpeg($img, "img/resize/" . $nama);
            imagedestroy($gambar_asli);
            imagedestroy($img);
            $insert         = mysqli_query ($host, "INSERT INTO tb_gambar (nama_original, nama_resize) VALUES ('$nama', '$nama_baru')");
            if($insert){
                ?>
                    <script language="JavaScript">
                        alert('Good! Upload and resize image success ...');
                        document.location='view-gambar.php';
                    </script>
                <?php
            }
            else {
                echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
            }
        }
        else if ($format=="gif") {
            move_uploaded_file($asal, "img/".$nama);
            $asli           ="img/".$nama;
            $nama_baru      = "resize-".$nama;
            $gambar_asli    = imagecreatefromgif ($asli);
            $lebar_asli     = imageSX($gambar_asli);
            $tinggi_asli    = imageSY($gambar_asli);
            $pembagi        = $lebar_asli / $width_size;
            $lebar_baru     = $lebar_asli/$pembagi;
            $tinggi_baru    = $tinggi_asli/$pembagi;
            $img            = imagecreatetruecolor($lebar_baru, $tinggi_baru);
            imagecopyresampled($img, $gambar_asli, 0, 0, 0, 0, $lebar_baru, $tinggi_baru, $lebar_asli, $tinggi_asli);
            imagejpeg($img, "img/resize/" . $nama);
            imagedestroy($gambar_asli);
            imagedestroy($img);
            $insert         = mysqli_query ($host, "INSERT INTO tb_gambar (nama_original, nama_resize) VALUES ('$nama', '$nama_baru')");
            if($insert){
                ?>
                    <script language="JavaScript">
                        alert('Good! Upload and resize image success ...');
                        document.location='view-gambar.php';
                    </script>
                <?php
            }
            else {
                echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
            }
        }
        else{
            ?>
                    <script language="JavaScript">
                        alert('Oops! Upload and resize image gagal ...');
                        document.location='./';
                    </script>
            <?php
        }
    }
?>
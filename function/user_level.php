<?php
function user_level($wilayah_akses){
   include('../auth/koneksi.php');
   $sql         = mysqli_query($host,"SELECT * FROM user_level WHERE wilayah_akses = '$wilayah_akses'");
   $data        = mysqli_fetch_array($sql);
   $user_level  = $data['user_level'];
   return $user_level;
}


?>

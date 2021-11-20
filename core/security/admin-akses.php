<?php
$sql_admin_data = mysqli_query($host,"SELECT * FROM users WHERE id_user='$user_check'");
$count_admin    = mysqli_num_rows($sql_admin_data);
$data_admin     = mysqli_fetch_array($sql_admin_data);
$wilayah_akses_user  = $data_admin['wilayah_akses'];
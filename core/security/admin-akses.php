<?php
$sql_admin_data = mysqli_query($host,"SELECT * FROM users WHERE id_user='$user_check'");
$count_admin    = mysqli_num_rows($sql_admin_data);
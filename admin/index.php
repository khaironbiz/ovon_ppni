<?php
if($_SERVER['SERVER_NAME']=='localhost'){
    $home_page           = "http://localhost/ovon_ppni/admin/login";
}else{
    $home_page           = "https://nurse.my.id/admin/login";
}
echo "<script>document.location=\"$home_page\"</script>";

?>
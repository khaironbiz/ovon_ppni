<?php
if($_SERVER['SERVER_NAME']=='localhost'){
    $home_page           = "http://localhost/ovon_ppni/id";
}else{
    $home_page           = "https://nurse.my.id/id";
}
echo "<script>document.location=\"$home_page\"</script>";

?>
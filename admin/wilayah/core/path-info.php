<?php
$lokasi = pathinfo($_SERVER['PHP_SELF']);
echo "dirname : ".$lokasi['dirname'], "\n"."<br>";
echo "basename : ".$lokasi['basename'], "\n"."<br>";
echo "extension : ".$lokasi['extension'], "\n"."<br>";
echo "filename : ".$lokasi['filename'], "\n"."<br>";

?>
<?php 
date_default_timezone_set("Asia/Jakarta");
//koneksi ke local
$host = mysqli_connect("153.92.7.151", "u487816097_ovon", "@Sql250909#", "u487816097_ovon");
//koneksi ke hosting
//$host = mysqli_connect("localhost", "u853814933_uas", "Sql250909", "u853814933_uas");

 if($host){
  
 } else{
  echo "Koneksi gagal!" . mysqli_connect_error();
  die();
 }
 ?>
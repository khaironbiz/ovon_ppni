<?php 
date_default_timezone_set("Asia/Jakarta");
//koneksi ke local
$host = mysqli_connect("localhost", "root", "", "wilayah");
//koneksi ke hosting
//$host = mysqli_connect("localhost", "u853814933_uas", "Sql250909", "u853814933_uas");

 if($host){
  
 } else{
  echo "Koneksi gagal!" . mysqli_connect_error();
  die();
 }
 ?>
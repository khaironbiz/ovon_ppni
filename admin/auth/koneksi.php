<?php 
include('site.php');
date_default_timezone_set("Asia/Jakarta");
//koneksi ke local
if($db ==1){
    //$host = mysqli_connect("localhost", "root", "", "ovon");
    $host = mysqli_connect("103.16.133.234", "phpmyadmin", "inifgrup", "khairon");
}else{
    $host = mysqli_connect("103.16.133.234", "phpmyadmin", "inifgrup", "khairon");
}

//koneksi ke hosting
//$host = mysqli_connect("localhost", "u853814933_uas", "Sql250909", "u853814933_uas");
//session_start();
 if($host){
    
 } else{
  echo "Koneksi gagal!" . mysqli_connect_error();
  die();
 }
 ?>
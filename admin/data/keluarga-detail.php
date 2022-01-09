<?php
include("../auth/session.php");
$key        = $_GET['id'];
$sql_kel    = mysqli_query($host,"SELECT * FROM keluarga 
                JOIN master_jenis_keluarga on master_jenis_keluarga.id_master_jenis_keluarga=keluarga.jenis_keluarga
                JOIN master_air_minum on master_air_minum.id_master_air_minum=keluarga.sumber_air_minum
                JOIN master_jenis_jamban on master_jenis_jamban.id_master_jenis_jamban = keluarga.jenis_jamban
                JOIN master_atap on master_atap.id_master_atap = keluarga.atap_rumah
                JOIN master_dinding on master_dinding.id_master_dinding = keluarga.dinding_rumah
                JOIN master_lantai on master_lantai.id_master_lantai = keluarga.lantai_rumah
                JOIN master_bahan_bakar on master_bahan_bakar.id_master_bahan_bakar=keluarga.bahan_bakar
                JOIN users on users.id_user = keluarga.created_by
                WHERE keluarga.key_keluarga='$key'");
$data_kel   = mysqli_fetch_assoc($sql_kel);
$judul      = "Data Keluarga ".$data_kel['nama_keluarga'];
$template   = "../theme/table-simple.php";
$wrapp      = "../core/wrapp.php";
$content    = "../views/data/keluarga-detail.php";
include($template);



?>
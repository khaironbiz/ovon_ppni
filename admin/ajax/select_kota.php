<?php
include('../auth/koneksi.php');
if (!empty($_GET['provinsi'])){
	if (ctype_digit($_GET['provinsi'])) {
		$query = mysqli_query($host, "SELECT * FROM 2020_kabupaten where provinsi=$_GET[provinsi] order by nama_kabupaten");
		echo"<option selected value=''>Pilih Kota/Kab</option>";
		while($d = mysqli_fetch_array($query)){
			echo "<option value='$d[kabupaten]'>$d[nama_kabupaten]</option>";
		}
	}
}

if (empty($_GET['kec'])){
	if (!empty($_GET['kabupaten'])){
		if (ctype_digit($_GET['kabupaten'])) {
			$query = mysqli_query($host, "SELECT * FROM 2020_kecamatan where kabupaten=$_GET[kabupaten] order by nama_kecamatan");
			echo"<option selected value=''>Pilih Kecamatan baru</option>";
			while($d = mysqli_fetch_array($query)){
				echo "<option value='$d[kecamatan]'>$d[nama_kecamatan]</option>";
			}
		}
	}
} if (!empty($_GET['kec'])){
		if (ctype_digit($_GET['kec'])) {
			$query = mysqli_query($host, "SELECT * FROM 2020_desa where 
			kecamatan =$_GET[kec] order by nama_desa");
			echo"<option selected value=''>Pilih Kelurahan/Desa</option>";
			while($d = mysqli_fetch_array($query)){
				echo "<option value='$d[desa]'>$d[nama_desa]</option>";
			}
		}
	}
?>
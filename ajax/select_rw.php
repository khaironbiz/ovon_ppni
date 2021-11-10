<?php
include('../auth/koneksi.php');
if (!empty($_GET['q'])){
	if (ctype_digit($_GET['q'])) {
		$query = mysqli_query($host, "SELECT * FROM rt where rw=$_GET[q] order by id_rt");
		echo"<option selected value=''>Pilih RT</option>";
		while($d = mysqli_fetch_array($query)){
			echo "<option value='$d[id_rt]'>$d[nama_rt]</option>";
		}
	}
}

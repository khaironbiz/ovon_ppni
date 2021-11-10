<?php
include("../auth/koneksi.php");
include("../auth/site.php");
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            
                        </tr>
                            <?php
                            $no=1;
                            $sql    = mysqli_query($host,"SELECT * FROM wilayah_2020 WHERE sinkron ='' LIMIT 1");
                            while($data= mysqli_fetch_array($sql)){
                                $kode_db        = $data['kode'];
                                $id             = $data['id'];
                                $kode_wilayah   = strlen($data['kode']);
                                if($kode_wilayah==2){
                                    $kode_wilayah   = $data['kode'];
                                    $nama_wilayah   = "provinsi";
                                    $update = mysqli_query($host, "UPDATE wilayah_2020 SET $nama_wilayah ='$kode_db', sinkron='Y' WHERE id='$id' " );
                                    if($update){
                                            echo "<script>document.location=\"$site_url/wilayah/wilayah-2020.php\"</script>";
                                    }
                                    
                                }if($kode_wilayah==5){
                                    $nama_wilayah   = "kabupaten";
                                    $update = mysqli_query($host, "UPDATE wilayah_2020 SET $nama_wilayah ='$kode_db', sinkron='Y' WHERE id='$id' " );
                                    if($update){
                                            echo "<script>document.location=\"$site_url/wilayah/wilayah-2020.php\"</script>";
                                    }
                                }if($kode_wilayah==8){
                                    $nama_wilayah   = "kecamatan";
                                    $update = mysqli_query($host, "UPDATE wilayah_2020 SET $nama_wilayah ='$kode_db', sinkron='Y' WHERE id='$id' " );
                                    if($update){
                                            echo "<script>document.location=\"$site_url/wilayah/wilayah-2020.php\"</script>";
                                    }
                                }if($kode_wilayah==13){
                                    $nama_wilayah   = "kelurahan";
                                    $update = mysqli_query($host, "UPDATE wilayah_2020 SET $nama_wilayah ='$kode_db', sinkron='Y' WHERE id='$id' " );
                                    if($update){
                                            echo "<script>document.location=\"$site_url/wilayah/wilayah-2020.php\"</script>";
                                    }
                                }
                            ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['kode']?></td>
                                    <td><?= $data['nama']?></td>
                                    <td><?= $nama_wilayah; ?></td>
                                    
                                </tr>
                        <?php
                        
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</html>

<?php
include("../auth/koneksi.php");
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
                            <th>Provinsi</th>
                            <th>Kabupaten</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>Perawat Desa</th>
                            <th>RW</th>
                            <th>RT</th>
                            <th>KK</th>
                            <th>Jiwa</th>
                        </tr>
                            <?php
                            $no=1;
                            $sql    = mysqli_query($host,"SELECT * FROM provinsi");
                            while($data= mysqli_fetch_array($sql)){
                                $id_provinsi    = $data['id_provinsi'];
                                $sql_count_kabupaten = mysqli_query($host,"SELECT * FROM kabupaten WHERE id_provinsi='$id_provinsi'");
                                $count_kabupaten     = mysqli_num_rows($sql_count_kabupaten);

                                $sql_count_kecamatan = mysqli_query($host,"SELECT * FROM kecamatan WHERE id_provinsi='$id_provinsi'");
                                $count_kecamatan     = mysqli_num_rows($sql_count_kecamatan);

                                $sql_count_desa = mysqli_query($host,"SELECT * FROM desa WHERE id_provinsi='$id_provinsi'");
                                $count_desa     = mysqli_num_rows($sql_count_desa);   
                            ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['nama_provinsi']." (".$data['id_provinsi'].")"?></td>
                                    <td><?= $count_kabupaten?></td>
                                    <td><?= $count_kecamatan?></td>
                                    <td align="right"><?= $count_desa?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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

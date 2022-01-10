<div class="content-wrapper">
    <section class="content">
        <form action="" method="POST">
            <div class="container-fluid">
            <?php
            if(isset($_SESSION['status'])&& $_SESSION['status'] !=""){
            ?>
            <div class="alert alert-<?= $_SESSION['status_info']?> alert-dismissible fade show" role="alert">
                <strong>Hay</strong> <?= $_SESSION['status']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            unset($_SESSION['status']);
            }
            ?>
                <div class="card mt-1">
                    <div class="card-header bg-dark">
                        <?= $judul?>
                    </div>
                    <div class="card-body">
                        <?php
                        include('aksi/keluarga/kunjungan.php');
                        include('modal/keluarga/kunjungan.php');
                        ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no             = 1;
                                $id_keluarga    = $data_keluarga['id_keluarga'];
                                $sql            = mysqli_query($host,"SELECT * FROM kunjungan_keluarga WHERE id_keluarga='$id_keluarga'");
                                while($data     = mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $data['tgl_kunjungan']?></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </section>
</div>
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
                <div class="card">
                    <div class="card-header bg-dark">
                        Pengkajian Individu Usia
                        <?php
                        $umurnya    = $umur->y;
                        $umur_bulan = $umur->m;
                        echo $umurnya." Tahun";
                        ?>
                    </div>
                    <div class="card-body">
                        <?php
                        if($umurnya <1){
                            include('ekstensi/bayi.php');
                        }elseif($umurnya <2){
                            include('ekstensi/batita.php');
                        }elseif($umurnya <5){
                            include('ekstensi/balita.php');
                        }elseif($umurnya <16){
                            include('ekstensi/remaja.php');
                        }elseif($umurnya < 60){
                            include('ekstensi/dewasa.php');
                            include('modal/anggota/dewasa/ttv-lab.php');
                            include('modal/anggota/dewasa/data-dasar.php');
                            include('modal/anggota/dewasa/pola-kebiasaan.php');
                            if($sex == 43){
                                //aksi
                            }else{
                                //aksi
                                include('modal/anggota/dewasa/kesehatan-wanita.php');
                                include('modal/anggota/dewasa/kehamilan.php');
                            }
                        }elseif($umurnya >=60){
                            include('ekstensi/lansia.php');
                        }
                            // include('aksi/keluarga/create.php');
                            // include('modal/keluarga/create.php');
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
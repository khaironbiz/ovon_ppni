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
                        echo $umurnya." Tahun";
                        ?>
                    </div>
                    <div class="card-body">
                        <?php
                        if($umurnya <1){
                            include('modal/anggota/usia0-1th.php');
                        }elseif($umurnya <2){
                            include('modal/anggota/usia1-2th.php');
                        }elseif($umurnya <3){
                            include('modal/anggota/usia3-5th.php');
                        }elseif($umurnya <16){
                            include('modal/anggota/usia6-15th.php');
                        }elseif($umurnya < 60){
                            if($sex < 44){
                                include('modal/anggota/usia16-59th.php');
                            }else{
                                include('modal/anggota/wanita16-59th.php');
                            }
                            
                        }elseif($umurnya >=60){
                            
                        }
                            // include('aksi/keluarga/create.php');
                            // include('modal/keluarga/create.php');
                        ?>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </section>
</div>
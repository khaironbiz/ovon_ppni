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
                        Pengkajian Keluarga
                    </div>
                    <div class="card-body">
                        <?php
                            include('aksi/keluarga/create.php');
                            include('modal/keluarga/create.php');
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
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $judul; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                <label>Nama Kepala Keluarga</label>
                                <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                <label>Jenis Kelamin</label>
                                <select class="custom-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                <label for="validationDefault05">Tanggal Lahir</label>
                                <input type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                
                                <div class="col-md-4 mb-3">
                                    <label>Kartu Keluarga</label>
                                    <input type="number" class="form-control" required>
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                <label for="validationDefault05">NIK</label>
                                <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Jenis Keluarga</label>
                                    <select class="custom-select" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" required>
                                <label class="form-check-label">
                                    Agree to terms and conditions
                                </label>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
        <!-- /.row -->
        </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
                                <div class="col-md-6 mb-3">
                                <label for="validationDefault01">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                <label for="validationDefault02">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                <label for="validationDefault03">City</label>
                                <input type="text" class="form-control" id="validationDefault03" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                <label for="validationDefault04">State</label>
                                <select class="custom-select" id="validationDefault04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                <label for="validationDefault05">Zip</label>
                                <input type="text" class="form-control" id="validationDefault05" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
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
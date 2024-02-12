<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dian Motor</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('admin.css')
</head>

<body>
    <!-- Left Panel -->
    @include('admin.sidebar')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('admin.navbar')
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="col-lg">
                  <div class="card">
                      <div class="card-header">
                          <strong class="card-title">Tambah Data Produk</strong>
                      </div>
                      <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                <form method="POST" action="{{ url('/updateCategory/' . $category['id']) }}">
                                  @csrf
                                  @method('PUT')
                                  <div class="form-group">
                                      <label for="category">Nama Kategori</label>
                                      <input type="text" class="form-control" id="category" name="category"
                                          value="{{ $category['category'] }}" required>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div> <!-- .card -->
                </div>
            <!-- /#add-category -->
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    @include('admin.js')
</body>
</html>

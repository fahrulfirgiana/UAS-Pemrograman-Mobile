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
    <style>
      
    </style>
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
                  <div class="card card-oi">
                      <div class="card-header">
                          <strong class="card-title">Tambah Data Kategori</strong>
                      </div>
                      <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                <div class="container">
                                  <form method="POST" action="{{ route('add_category') }}">
                                      @csrf
                                      <div class="mb-3">
                                          <label for="category_name" class="form-label"><strong class="card-title">Kategori</strong></label>
                                          <input type="text" class="form-control col-sm-5" id="category_name" name="category" required>
                                      </div>
                                      <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Add Category</button>
                                  </form>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div> <!-- .card -->

              </div>
                <div class="col-lg">
                  <div class="card card-oi">
                      <div class="card-header">
                          <strong class="card-title">Data Kategori</strong>
                      </div>
                      <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                <div class="container">
                                  <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $id => $category)
                                            <tr>
                                                <td>{{ $category['category'] }}</td>
                                                <td>
                                                  <div class="btn-group" role="group" aria-label="Basic example">
                                                      <a href="{{ url('/editKategori/' . $category['id']) }}" class="btn btn-success mr-2">Edit</a>
                                                      <form action="{{ url('/deleteKategori/' . $category['id']) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus Kategori ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                  </div>
                                              </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
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

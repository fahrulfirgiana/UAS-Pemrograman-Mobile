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
                          <strong class="card-title">Edit Data Produk</strong>
                      </div>
                      <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                <form method="POST" action="{{ url('/update_product/' . $product['id']) }}" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <div class="form-group">
                                      <label for="nama_produk">Nama Produk</label>
                                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ $product['nama_produk'] }}" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="harga">Harga</label>
                                      <input type="number" class="form-control" id="harga" name="harga" value="{{ $product['harga'] }}" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="deskripsi">Deskripsi</label>
                                      <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $product['deskripsi'] }}</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori" required>
                                        <!-- Menampilkan daftar kategori dari Firebase sebagai pilihan -->
                                        <option value="{{$product['kategori']}}" selected="">{{$product['kategori']}}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category['category'] }}">{{ $category['category'] }}</option>
                                        @endforeach
                                    </select>
                                </div> 
                                  <div class="form-group">
                                      <label for="gambar">Ganti Gambar</label>
                                      <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*">
                                  </div>                
                                  <div class="form-group">
                                    @if($product['gambar'])
                                        <img src="{{ asset('images/' . $product['gambar']) }}" alt="Gambar Produk" class="img-thumbnail" style="max-width: 50px; max-height: 50px;">
                                    @endif
                                </div>
                                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                              </form>
                              </div>
                          </div>

                      </div>
                  </div> <!-- .card -->

              </div>
            <!-- /#add-category -->
            </div>
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

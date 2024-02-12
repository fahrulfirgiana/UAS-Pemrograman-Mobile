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
      .card-oi {
        height: 440px; /* Tinggi awal */
        overflow: auto;
      }
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
                          <strong class="card-title">Data Produk</strong>
                      </div>
                    <div class="container" style="margin-top: 10px; margin-bottom: 2px;">
                      <a class="btn btn-primary btn-sm" href="{{url('view_product')}}"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                    </div>
                      <!-- ... (previous code) ... -->
@if (!empty($product))
<div class="card-body">
    <table class="table">
        <thead>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($product as $id => $singleProduct)
                <tr>
                    <td>{{$singleProduct['nama_produk']}}</td>
                    <td>@currency($singleProduct['harga']) </td>
                    <td>{{$singleProduct['kategori']}}</td>
                    <td>{{$singleProduct['deskripsi']}}</td>
                    <td>
                        <img src="{{ asset('images/' . $singleProduct['gambar']) }}" alt="{{ $singleProduct['nama_produk'] }}" style="max-width: 40px; height: auto;">
                    </td>                              
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ url('/editProduct/' . $singleProduct['id']) }}" class="btn btn-success mr-2">Edit</a>
                            <form action="{{ url('/deleteProduct/' . $singleProduct['id']) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
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
    <div class="card-footer">
      {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
    </div>
</div>
@else
<div class="card-body">
    <table class="table">
        <thead>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
        </thead>
        <tbody>
            <tr>
                <td colspan="5" class="text-center">Belum ada data Produk</td>
            </tr>
        </tbody>
    </table>
</div>
@endif
<!-- ... (remaining code) ... -->

              </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        @include('admin.footer')
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    @include('admin.js')
</body>
</html>

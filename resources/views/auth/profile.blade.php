<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
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
                <div class="container">
                    <div class="col-lg">
                      <br>
                      @if(Session::has('message'))
                      <div class="alert alert-info alert-dismissible fade show" role="alert">
                          {{ Session::get('message') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      @endif
      
                      @if ($errors->any())
                      @foreach ($errors->all() as $error)
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          {{ $error }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      @endforeach
                      @endif
      
                      @if(Session::has('error'))
                      <div class="alert alert-danger alert-dismissible fade show">
                          {{ Session::get('error') }}
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                      </div>
                      @endif
      
                      <div class="card mb-4">
                          <div class="card-header">
                              <h4 class="card-title">Profile Information</h4>
                          </div>
                          <div class="card-body">
                              {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['App\Http\Controllers\Auth\ProfileController@update',$user->uid]]) !!}
                              <div class="form-group">
                                  {!! Form::label('displayName', 'Name') !!}
                                  {!! Form::text('displayName', null, ['class'=>'form-control'])!!}
                              </div>
                              <div class="form-group">
                                  {!! Form::label('email', 'Email') !!}
                                  {!! Form::email('email', null, ['class'=>'form-control'])!!}
                              </div>
                              <div class="text-right">
                                  {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                              </div>
                              {!! Form::close() !!}
                          </div>
                      </div>
      
                      <div class="card mb-4">
                          <div class="card-header">
                              <h4 class="card-title">Update Password</h4>
                          </div>
                          <div class="card-body">
                              {!! Form::open() !!}
                              <div class="form-group">
                                  {!! Form::label('new_password', 'New Password') !!}
                                  {!! Form::password('new_password', ['class'=>'form-control'])!!}
                              </div>
                              <div class="form-group">
                                  {!! Form::label('new_confirm_password', 'Confirm Password') !!}
                                  {!! Form::password('new_confirm_password', ['class'=>'form-control'])!!}
                              </div>
                              <div class="text-right">
                                  {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                              </div>
                              {!! Form::close() !!}
                          </div>
                      </div>
      
                      <div class="card mb-4">
                          <div class="card-header">
                              <h4 class="card-title">Delete Account</h4>
                          </div>
                          <div class="card-body">
                              {!! Form::open(['method'=>'DELETE', 'action' =>['App\Http\Controllers\Auth\ProfileController@destroy',$user->uid]]) !!}
                              <p class="text-left">
                                  Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
                              </p>
                              <div class="text-left">
                                  {!! Form::submit('Delete Account', ['class'=>'btn btn-danger']) !!}
                              </div>
                              {!! Form::close() !!}
                          </div>
                      </div>
                      </div>
                  </div>
            <!-- /#add-category -->
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

@extends('layouts.app')

@section('content')

  <div class="container" style="margin-top: 8%">
    <div class="row justify-content-center ">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Reset Password</div>
          <div class="card-body">

            @if(Session::has('message'))
              <div class="alert alert-info alert-dismissible fade show">
                {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
            @endif

            @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissible fade show">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
            @endif

            @if ($errors->any())
              @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show">
                  {{ $error }}
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
              @endforeach
            @endif

            {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\Auth\ResetController@store']) !!}

            <div class="form-group">
              {!! Form::label('email', 'Email:') !!}
              {!! Form::email('email', null, ['class'=>'form-control'])!!}
            </div>


              
            <div class="btn-group" role="group" aria-label="Basic example">
                <div class="form-group">
                    <a href="{{ route('login') }}" class="btn btn-dark mr-2">Back to Login</a>
                </div>
                <div class="form-group">
                    {!! Form::submit('Sent Email', ['class'=>'btn btn-dark']) !!}
                </div>
            </div>            

            {!! Form::close() !!}
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection

@extends('master')


@section('content')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>

<form class="form-horizontal" action="/register" method="POST">

    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Full Name : </label>
        <div class="col-sm-10">
          <input type="text"  name="fullName" class="form-control"  placeholder="Enter Your Full Name">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Condirm Password:</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control" id="pwd" placeholder="Re -Enter password">
        </div>
      </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Register</button>
      </div>
    </div>
  </form>

@endsection

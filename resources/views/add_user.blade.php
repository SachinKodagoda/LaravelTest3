@extends('layouts.master')
@section('content')
<form class="form-container" action="{{ route('addUserPost') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="user_name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="user_email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
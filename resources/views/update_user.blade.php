@extends('layouts.master')
@section('content')
<form class="form-container" action="{{ route('addUserPut') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="hidden" class="form-control" name="user_id" value="{{$user->id}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="user_name" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="user_email" value="{{$user->email}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" class="form-control" name="user_password" value="{{$user->password}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
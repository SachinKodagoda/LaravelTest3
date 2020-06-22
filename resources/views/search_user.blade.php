@extends('layouts.master')
@section('content')
<ul>
    @foreach($users as $user)
        <li>{{ $user -> name}}</li>
    @endforeach
</ul>

@endsection
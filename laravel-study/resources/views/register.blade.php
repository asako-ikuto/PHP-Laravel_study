@extends('layouts.laravelapp')

@section('title', 'Register')

@section('content')
@if (count($errors) > 0)
<div>
    <ul class="alert alert-danger" style="list-style: none; padding-left: 0;" role="alert">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="/dashboard" style="display: inline;">
    @csrf
    <label for="name" style="width:150px; text-align:right;">Name</label>
    <input type="text" name="name" size="30"><br>
    <label for="email" style="width:150px; text-align:right;">E-Mail Address</label>
    <input type="email" name="email" size="30"><br>
    <label for="password" style="width:150px; text-align:right;">Password</label>
    <input type="password" name="password" size="30"><br>
    <label for="password" style="width:150px; text-align:right;">Comfirm Password</label>
    <input type="password" name="confirmPassword" size="30"><br>
    <input type="submit" value="Register" class="btn btn-primary" style="margin-left:-25px;">
</form>
@endsection
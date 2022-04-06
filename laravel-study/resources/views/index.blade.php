@extends('layouts.laravelapp')

@section('title', 'Login')

@section('content')
<form method="POST" action="" style="display: inline;">
    @csrf
    <label for="email" style="width:130px; text-align:right;">E-Mail Address</label>
    <input type="email" name="email" size="30"><br>
    <label for="password" style="width:130px; text-align:right;">Password</label>
    <input type="password" name="password" size="30"><br>
    <input type="submit" value="login" class="btn btn-primary" style="margin-left:100px;">
</form>
<a href="#">Forgot your password?</a>
@endsection
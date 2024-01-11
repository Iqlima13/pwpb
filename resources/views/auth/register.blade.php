@extends('auth.layouts')

@section('content')
<h1>Register</h1>
<a href="{{ route('login') }}">Login</a>
<br><br>
<form action="{{ route('store') }}" method="post">
    @csrf
    <label>Nama Lengkap</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>
    <label>Email Address</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>
    <label>Password</label><br>
    <input type="password" id="password" name="password"><br><br>
    <label>Password confirmation</label><br>
    <input type="password" id="password_confirmation" name="password_confirmation"><br><br>
    <input type="submit" value="Register">
</form>

@endsection
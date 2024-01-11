@extends('auth.layouts')

@section('content')

<h1>Login</h1>
<br><br>
<form action="{{ route('authenticate') }}" method="post">
    @csrf
    <label>Email Address</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}">
    <br><br>
    <label>Password</label><br>
    <input type="password" id="password" name="password"><br><br>
    <a href="{{ route('register') }}" class="btn btn-info">Daftar</a>
    <input type="submit" class="btn btn-danger" value="Login">
</form>

@endsection
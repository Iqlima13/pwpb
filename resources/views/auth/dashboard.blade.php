@extends('auth.header')

@section('content')

<h1>Dashboard</h1>
@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@else
    <p>You are logged in!</p>
@endif

@endsection
@extends('siwa.footer')
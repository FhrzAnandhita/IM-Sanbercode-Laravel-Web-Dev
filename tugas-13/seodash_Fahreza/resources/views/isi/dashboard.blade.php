@extends('main.master')

@section('title', 'Dashboard')

@section('content')
<h2>Dashboard</h2>

<a href="{{ route('register') }}" class="btn btn-primary">
    Register
</a>
@endsection

@extends('main.master')

@section('title', 'Dashboard')

@section('content')

<h1 class="display-4 fw-bold mb-3">
    Selamat Datang {{ $first_name }} {{ $last_name }}
</h1>

<h2 class="fw-semibold">
    Terima kasih telah bergabung di Sanberbook.
    Social Media kita bersama!
</h2>

@endsection

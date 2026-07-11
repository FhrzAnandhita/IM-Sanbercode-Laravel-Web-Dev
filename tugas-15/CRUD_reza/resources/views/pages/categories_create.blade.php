@extends('main')

@section('content')

<form action="{{ route('categories.store') }}" method="POST">

    @csrf

    <input type="text"
           name="name"
           class="form-control mb-3"
           placeholder="Nama">

    <textarea name="description"
              class="form-control mb-3"
              placeholder="Deskripsi"></textarea>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection

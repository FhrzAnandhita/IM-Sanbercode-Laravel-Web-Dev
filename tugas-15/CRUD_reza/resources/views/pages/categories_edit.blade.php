@extends('main')

@section('content')

<div class="container">

<form action="{{ route('categories.update',$categories->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Category Name</label>
        <input type="text"
               name="name"
               value="{{ $categories->name }}"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description"
                  class="form-control">{{ $categories->description }}</textarea>
    </div>

    <button class="btn btn-success">
        Update
    </button>

</form>

</div>

@endsection

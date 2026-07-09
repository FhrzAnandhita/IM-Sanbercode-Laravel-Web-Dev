@extends('main.master')

@section('title', 'Register')

@section('content')

<form action="{{ url('/welcome') }}" method="POST">
    @csrf
    <input type="text"
        name="first_name"
        class="form-control"
        placeholder="Masukkan First Name"
        required>

    <input type="text"
        name="last_name"
        class="form-control"
        placeholder="Masukkan Last Name"
        required>

    <div class="mb-3">
        <label class="form-label d-block">Gender</label>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male" id="male">
            <label class="form-check-label" for="male">
                Male
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
            <label class="form-check-label" for="female">
                Female
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Other" id="other">
            <label class="form-check-label" for="other">
                Other
            </label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Nationality</label>
        <select class="form-select" name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Japanese">Japanese</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label d-block">Language Spoken</label>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" value="Bahasa Indonesia">
            <label class="form-check-label">
                Bahasa Indonesia
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" value="English">
            <label class="form-check-label">
                English
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" value="Other">
            <label class="form-check-label">
                Other
            </label>
        </div>
    </div>

    <div class="mb-4">
        <label class="form-label">Bio</label>
        <textarea name="bio" rows="5" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Register
    </button>

</form>

@endsection

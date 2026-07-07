<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Halaman Register</h1>

<form action="/welcome" method="POST">

    @csrf

    <input type="text" name="first_name" placeholder="Nama Depan">

    <input type="text" name="last_name" placeholder="Nama Belakang">

    <label>Gender</label><br>
    <input type="radio" name="gender" value="Laki-laki">Laki-laki
    <input type="radio" name="gender" value="Perempuan">Perempuan
    <br><br>

    <label>Nationality</label><br>
    <select name="nationality">
        <option>Indonesia</option>
        <option>Malaysia</option>
        <option>Singapore</option>
    </select>

    <br><br>

    <label>Language Spoken</label><br>

    <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia
    <br>

    <input type="checkbox" name="language[]" value="English"> English
    <br>

    <input type="checkbox" name="language[]" value="Other"> Other

    <br><br>

    <label>Bio</label><br>

    <textarea name="bio" rows="5" cols="30"></textarea>

    <br><br>

    <button type="submit">Sign Up</button>

</form>

</body>
</html>

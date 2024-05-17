<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Register</h1>
    <form action="/post" method="POST">
        @csrf
        <label>Nama Lengkap: </label> <br><br>
        <input type="text" name="fullname"> <br><br>
        <label>Alamat:</label> <br><br>
        <input type="text" name="address"> <br><br>

    <label>Gender</label> <br><br>
        <input type="radio" name="kelamin" id="Male"> Male <br>
        <input type="radio" name="kelamin" id="Female"> Female <br>
        <input type="radio" name="kelamin" id="Other"> Other <br><br>

    <label>Nationallity: </label> <br><br>
        <select name="Negara">
            <option value="Indonesian"> Indonesian</option>
            <option value="Singapore"> Singapore</option>
            <option value="Malaysian"> Malaysian</option>
            <option value="Australian"> Australian</option>
        </select> <br><br>

    <label>Language Spoken: </label> <br><br>
        <input type="checkbox" name="bahasa" id="Bahasa Indonesia"> Bahasa Indonesia <br>
        <input type="checkbox" name="bahasa" id="English"> English <br>
        <input type="checkbox" name="bahasa" id="Other"> Other <br><br>

    <label>Deskripsi: </label> <br>
        <textarea name="description" rows="10" cols="30"></textarea> <br><br>
        <input type="submit" value="Sign Up">

    </form>
</body>
</html>
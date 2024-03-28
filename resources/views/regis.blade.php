<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registerasi</title>
    <link rel="stylesheet" href="{{ ('asset/css/regis.css') }}">
   
</head>
<body>
    <h1>Registerasi</h1>
    <div class="kotak_login">
        <p class="tulisan login"></p>
        <form action="regis/view" method="post">
            {{ csrf_field() }}
            <label for="#">nama</label> <br>
            <input type="text" name="nama" class="form_login" placeholder="masukan nama"> <br>

            <label for="">alamat</label> <br>
            <input type="text" name="alamat" class="form_login" placeholder="masukan alamat"> <br>

            <label for="">NO HP</label> <br>
            <input type="text" name="no_hp" class="form_login" placeholder="masukan nomer hp"><br>

            <input type="submit" class="tombol_login" value="next">
        </form>
    </div>
</body>
</html>
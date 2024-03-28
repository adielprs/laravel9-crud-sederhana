<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{ ('asset/css/login.css') }}">
</head>
<body>
    <h1>login</h1>
    <div class="kotak_login">
        <p class="tulisan login"></p>
        <form action="login/view" method="Post">
            {{ csrf_field() }}
            <label for="#">username</label> <br>
            <input type="text" name="username" class="form_login" placeholder="masukan username" required="required"> <br>

            <label for="">nama</label> <br>
            <input type="text" name="nama" class="form_login" placeholder="masukan nama" required="required"> <br>

            <label for="">password</label> <br>
            <input type="password" name="password" class="form_login" placeholder="masukan password" required="required"> <br>

            <input type="submit" class="tombol_login" value="next">
        </form>
    </div>
</body>
</html>
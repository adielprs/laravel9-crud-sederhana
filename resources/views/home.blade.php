<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ ('asset/css/home.css') }}">
</head>
<body>
    <nav>
        <div class="logo">Toko Online</div>
        <div class="menu">
            <ul>
                <li>Home</li>
                <li><a href="{{ url('login') }}">Login</a></li>
                <li><a href="{{ url('regis') }}">Registerasi</a></li>
            </ul>
        </div>
    </nav>
    {{-- vavigasi --}}

    <section class="hero-container">
        <div>
            <div>
                <h1>Welcome To Website Toko Online</h1>
                <p>Bedagang Adalah Usaha Kami</p>
            </div>
        </div>
        <img src="{{ ('asset/gambar/toko1.jpg') }}" alt="">
    </section>
    {{-- atas --}}

    <section class="content-container">
        <div class="card">
            <img src="{{ ('asset/gambar/buah naga.jpg') }}" alt="card1">
            <div class="card-body">
                <h3>Buah Nanas</h3>
                <p>Rp.30.000</p>
            </div>
            <div>
                <p>NOHP:087645324353</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ ('asset/gambar/buah pisang.jpg') }}" alt="card2">
            <div class="card-body">
                <h3>Buah Pisang</h3>
                <p>Rp.10.000</p>
            </div>
            <div class="card-footer">
                <p>NOHP:089765564</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ ('asset/gambar/nanas.jpg') }}" alt="">
            <div class="card-body">
                <h3>Buah Nanas</h3>
                <p>Rp20.000</p>
            </div>
            <div class="card-footer">
                <p>NOHP:0958454678</p>
            </div>
        </div>
    </section>
</body>
</html>
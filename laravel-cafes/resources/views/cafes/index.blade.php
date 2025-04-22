<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tempat Nongkrong</title>
</head>
<body>
    <h1>Daftar Cafe</h1>
    <ul>
        @foreach ($cafes as $cafe)
            <li>
                <strong>{{ $cafe->name }}</strong><br>
                Lokasi: {{ $cafe->location }}<br>
                Jam Buka: {{ $cafe->open_hours }}
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>

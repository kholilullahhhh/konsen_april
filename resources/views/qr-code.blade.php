<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align:center; margin-top:50px;">
    <h2>{{ 'tes' }}</h2>
    <p>Scan untuk absensi</p>
    {!! QrCode::size(250)->generate('https://dcc-dp.com/') !!}
    <p>QR Code: {{ 'tes' }}</p>
</body>
</html>
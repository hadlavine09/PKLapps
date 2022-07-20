<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data siswa </legend>
        @foreach($siswa as $murid)
        Id : {{$murid['id']}} <br>
        Nama : {{$murid['name']}} <br>
        Umur : {{$murid['age']}} <br>
        Status :
        @if($murid['age'] >= 17)
            Anda Berhak Mendapatkan KTP
        @else
            Anda Tidak Berhak Mendapatkan KTP
        @endif
        <br>
            @foreach($murid['mapel'] as $mapel)
            <li>{{$mapel}}</li>
            @endforeach
            <hr>
        @endforeach
    </fieldset>
</body>
</html>
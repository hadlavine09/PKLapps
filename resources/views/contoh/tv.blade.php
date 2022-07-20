<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Jadwal Siarang TV</h1>

        @foreach($tv as $data)
        <table border="1">
            <tr>
                <th colspan="3">{{$data['nama']}} </th>
        </tr>
        <tr>
            <th>Nama Program</th>
            <th>jam tayang</th>
            <th>tanggal tayang</th>
        </tr>
        <tr>
            @foreach($data['acara_tv'] as $jadwal)
            <td>{{$jadwal['acara']}}</td>
            <td>{{$jadwal['jam_tayang']}}</td>
            <td>{{$jadwal['jadwal']}}</td>
        </tr>
        
        @endforeach
    </table>
    <br>
    <br>

    @endforeach
    

</center>
    {{-- <table border="1" cellpadding="10" cellspacing="0">
    {{$jadwal['jam_tayang']}} <br>
        <tr>
            <th>JADWAL PROGRAM SIARAN TV</th>
            <th>JAM TAYANG</th>
        </tr>

        @foreach ($tv as $data)
            <tr>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['jadwal'] }}</td>
            </tr>

            @foreach ($data['acara_tv'] as $jadwal)
                <tr>
                    <td>{{ $jadwal['acara'] }}</td>
                    <td>{{ $jadwal['jam_tayang'] }}</td>
                </tr>
            @endforeach
        @endforeach

    </table> --}}

    {{-- <hr>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th rowspan="3">Jam Tayang </th>
            <th colspan="5">Jadwal Program Acara TV </th>
        </tr>
        <tr>
            @foreach ($tv as $data)
                <th>{{ $data['nama'] }}</th>
            </tr>
            @foreach($data['jadwal'] as $jadwal)
            <tr>
                
                <th>{{ $jadwal['jadwal'] }}</th>
            </tr>
            @endforeach
            @endforeach
            @foreach ($data['acara_tv'] as $acara_tv)
            <tr>
                <td>{{ $acara_tv['jam_tayang'] }} </td>
                <td>{{ $acara_tv['acara'] }} </td>
            </tr>
        </table>
        <hr>
        @endforeach --}}
    </body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Kode MP</th>
            <th>NAMA MP</th>
            <th>SKS</th>
            <th>SEMESTER</th>
        </tr>
        @foreach($mapel as $data_mapel)
        <tr>
            <td>{{$data_mapel['kode']}}</td>
            <td>{{$data_mapel['nama_mp']}}</td>
            <td>{{$data_mapel['sks']}}</td>
            <td>{{$data_mapel['semester']}}</td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>
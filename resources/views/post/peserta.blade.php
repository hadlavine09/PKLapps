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
        <legend>Data Peserta</legend>
        <table border="1">
            <tr>
                <th>No Siswa</th>
                <th>Kode Mp</th>
            </tr>
            @foreach($peserta as $data_peserta)
                
            <tr>
                <td>{{$data_peserta['no']}}</td>
                <td>{{$data_peserta['kode']}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>
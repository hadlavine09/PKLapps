<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0" style="margin:60px; margin-top:190px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
        </tr>
        @foreach($siswa as $data_siswa)
        <tr>
            <td>{{$data_siswa['no']}}</td>
            <td>{{$data_siswa['nama']}}</td>
            <td>{{$data_siswa['jk']}}</td>
            <td>{{$data_siswa['jurusan']}}</td>
        </tr>
            
        @endforeach
    </table>
    <br>
        <table border="1" cellpadding="10" cellspacing="0" style="margin-left: 500px; margin-top:-260px">
            
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
    <br>
    <table border="1" cellpadding="10" cellspacing="0" style="margin-left: 800px; margin-top:-180px">
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
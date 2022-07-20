<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Pengunjung</th>
            <th>NAMA Pengunjung</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>NO TLP</th>
            <th>NO KTP</th>
        </tr>
        <tr>
            @foreach($pengunjung as $data_pengunjung)
            <tr>
                <td>{{$data_pengunjung['id_pengunjung']}}</td>
                <td>{{$data_pengunjung['nm_pengunjung']}}</td>
                <td>{{$data_pengunjung['alamat']}}</td>
                <td>{{$data_pengunjung['jk']}}</td>
                <td>{{$data_pengunjung['no_tlp']}}</td>
                <td>{{$data_pengunjung['no_ktp']}}</td>
            </tr>
                
            @endforeach
        </tr>
       
    </table>
    <br><br><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID KARYAWAN</th>
            <th>NAMA KARYAWAN</th>
            <th>JENIS KELAMIN</th>
        </tr>
        <tr>
            @foreach($karyawan as $data_karyawan)
            <tr>
                <td>{{$data_karyawan['id_karyawan']}}</td>
                <td>{{$data_karyawan['nm_karyawan']}}</td>
                <td>{{$data_karyawan['jk']}}</td>
            </tr>
                
            @endforeach
        </tr>
       
    </table>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID TRANSAKSI</th>
            <th>ID PENGUNJUNG</th>
            <th>ID KARYAWAN</th>
            <th>JUMLAH KAMAR</th>
            <th>TANGGAL KAMAR</th>
            <th>TANGGAL KELUAR</th>
            <th>LAMA NGINAP</th>
            <th>TOTAL HARGA</th>
        </tr>
        <tr>
            @foreach($transaksi as $data_transaksi)
            <tr>
                <td>{{$data_transaksi['no_transaksi']}}</td>
                <td>{{$data_transaksi['id_pengunjung']}}</td>
                <td>{{$data_transaksi['id_karyawan']}}</td>
                <td>{{$data_transaksi['jmlh_kamar']}}</td>
                <td>{{$data_transaksi['tgl_masuk']}}</td>
                <td>{{$data_transaksi['tgl_keluar']}}</td>
                <td>{{$data_transaksi['lama_nginap']}}</td>
                <td>{{$data_transaksi['total_harga']}}</td>
            </tr>
                
            @endforeach
        </tr>
       
    </table>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID DETAIL TRANSAKSI</th>
            <th>NO TRANSAKSI</th>
            <th>NO KAMAR</th>
        </tr>
        <tr>
            @foreach($detail_transaksi as $data_detail_transaksi)
            <tr>
                <td>{{$data_detail_transaksi['id_dtl_transaksi']}}</td>
                <td>{{$data_detail_transaksi['no_transaksi']}}</td>
                <td>{{$data_detail_transaksi['no_kamar']}}</td>
            </tr>
                
            @endforeach
        </tr>
       
    </table>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO KAMAR</th>
            <th>JENIS KAMAR</th>
            <th>HARGA</th>
        </tr>
        <tr>
            @foreach($kamar as $data_kamar)
            <tr>
                <td>{{$data_kamar['no_kamar']}}</td>
                <td>{{$data_kamar['jenis_kamar']}}</td>
                <td>{{$data_kamar['harga']}}</td>
            </tr>
                
            @endforeach
        </tr>
       
    </table>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if ($pilih == 'Ayam Goreng')
        <br>PESANAN ANDA = {{ $pilih }}
        <br>HARGA = Rp.150000
    @elseif($pilih == 'Lobster')
        <br>PESANAN ANDA = {{ $pilih }}
        <br>HARGA = Rp.20000
    @elseif($pilih == 'Pizza')
        <br>PESANAN ANDA = {{ $pilih }}
        <br>HARGA = Rp.50000
    @elseif($pilih == 'Tiramisu')
        <br>PESANAN ANDA = {{ $pilih }}
        <br>HARGA = Rp.30000
    @elseif($pilih == 'Pasta')
        <br>PESANAN ANDA = {{ $pilih }}
        <br>HARGA = Rp.25000
    @else
        Makanan Tidak Ada !!!
    @endif
    <br>
    ===================================
    <br>
    @if ($pilih2 == 'Ayam goreng')
        <br>PESANAN ANDA = {{ $pilih2 }}
        <br>HARGA = Rp.150000
    @elseif($pilih2 == 'Lobster')
        <br>PESANAN ANDA = {{ $pilih2 }}
        <br>HARGA = Rp.20000
    @elseif($pilih2 == 'Pizza')
        <br>PESANAN ANDA = {{ $pilih2 }}
        <br>HARGA = Rp.50000
    @elseif($pilih2 == 'Tiramisu')
        <br>PESANAN ANDA = {{ $pilih2 }}
        <br>HARGA = Rp.30000
    @elseif($pilih2 == 'Pasta')
        <br>PESANAN ANDA = {{ $pilih2 }}
        <br> HARGA = Rp.25000
    @else
        Makanan Tidak Ada !!!
    @endif

</body>

</html>

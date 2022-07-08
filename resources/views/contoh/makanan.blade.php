<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if($pilih == 'ayam goreng')
        <br>PESANAN ANDA = {{ $pilih}}
        <br> HARGA {{$pilih}} = Rp.150000
        @elseif($pilih == 'lobster')
        <br>PESANAN ANDA ={{ $pilih}}
        <br> HARGA {{$pilih}} = 20000
        @elseif($pilih == 'pizza')
        <br>PESANAN ANDA ={{ $pilih}}
        <br> HARGA {{$pilih}} = 50000
        @elseif($pilih == 'tiramisu')
        <br>PESANAN ANDA ={{ $pilih}}
        <br> HARGA {{$pilih}} = 30000
        @elseif($pilih == 'pasta')
        <br>PESANAN ANDA ={{ $pilih}}
      <br> HARGA {{$pilih}} = 25000
      @else {{$pilih}}
      @endif
</body>
</html>
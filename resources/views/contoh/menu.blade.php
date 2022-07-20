<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
  @foreach($menu as $data)
    <ul>
      <li>{{ $data['nama'] }}</li>
      @if(isset($data['kategori']))
      <ul>
        @foreach($data['kategori'] as $kategori)
        <li>{{ $kategori['nama_kategori'] }}</li>
        <ul>
          @if(isset($kategori['menu']))
            @foreach($kategori['menu'] as $menu)
              <li>{{ $menu }}</li>
            @endforeach
          @endif
        </ul>
        @endforeach
      </ul>
      @endif
    </ul>
  @endforeach
</body>
</html>
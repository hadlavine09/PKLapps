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
            <legend>Data Dosen</legend>
            <br><br>
            @foreach($dosen as $data_dosen)
            
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th colspan="2" >Nama Dosen</th>
                    <th colspan="2" >Mata Kuliah</th>
                </tr>
                <tr>
                    <td colspan="2" >{{$data_dosen['nama_dosen']}}</td>
                    <td colspan="2" >{{$data_dosen['mata_kuliah']}}</td>
                </tr>
                <tr>
                    <th colspan="4" >Data Mahasiswa</th>
                </tr>
                <?php $nilai_0 = 0 ?>
                <tr>
                    <th colspan="2" >Nama</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                </tr>
                <?php $nama_0 = 0 ?>
                @foreach($data_dosen['mahasiswa'] as $mahasiswa)
                    <tr>
                        <td colspan="2">{{$mahasiswa['nama']}}</td>
                        <td>{{$mahasiswa['nilai']}}</td>
                    <td>
                    @if($mahasiswa['nilai'] >= 90 && $mahasiswa['nilai'] <= 100)
                        <b>A</b> 
                    @elseif($mahasiswa['nilai'] >= 80)
                        <b>B</b>
                    @elseif($mahasiswa['nilai'] >= 70)
                        <b>C</b>
                    @elseif($mahasiswa['nilai'] >= 60)
                        <b>D</b>
                    @elseif($mahasiswa['nilai'] <= 60)
                        <b>E</b>
                        @else
                        <b>F</b>

                    @endif
                    </td>
                </tr>
                <?php $nilai_0  += $mahasiswa['nilai']?>
                @endforeach
                <tr>
                    <th colspan="4">Keterangan</th>
                </tr>
                <tr>
                    <td colspan="3"><b> Total Nilai </b></td>
                    <th>{{$nilai_0}}</th>
                    
                </tr>
                <?php $rata = $nilai_0 / count($data_dosen['mahasiswa']) ?>
                <tr>
                    <td colspan="3"><b> Nilai Rata-Rata </b></td>
                    <th>{{$rata}}</th>
                </tr>
                <tr>
                    @php
                            if($rata > 90){
                                $grade = 'A';
                            }
                            elseif($rata >= 80){
                                $grade = 'B';
                            }
                            elseif($rata >= 70){
                                $grade = 'C';
                            }
                            elseif($rata >= 60){
                                $grade = 'D';
                            }else {
                                $grade = 'E';
                            }
                        @endphp
                    <th colspan="3">Grade Dari Dosen {{$data_dosen['nama_dosen']}}</th>
                    <th>{{$grade}}</th>
                </tr>

        </table>

        <br><br><br><br><br>
        @endforeach
    </fieldset>
</body>
</html>
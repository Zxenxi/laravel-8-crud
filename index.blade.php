<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> index</title>
    <style>
        .container {
            margin: 50px 0px;
            /* background-color: red; */
        }

        table,
        th,
        td,
        tr {
            border: 1px solid black;
            border-collapse: collapse;
        }

        #tabel {
            /* background-color: grey; */
            margin: auto;
        }

        tr,
        td,
        td {
            padding: 10px;

        }

        .link {

            margin-left: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <table id="tabel">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Semester</th>
                <th>Alamat</th>
                <th colspan="2">Pilih</th>
            </tr>
            @foreach ($belajar as $x)
            <tr>
                <td>{{$x->nim_mahasiswa}}</td>
                <td>{{$x->nama_mahasiswa}}</td>
                <td>{{$x->semester_mahasiswa}}</td>
                <td>{{$x->alamat_mahasiswa}}</td>
                <td>
                    <a href="/mahasiswa/edit{{$x->id_mahasiswa}}">edit</a>
                </td>
                <td>
                    <a href="/mahasiswa/hapus{{$x->id_mahasiswa}}">hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="link">
            <a href="/mahasiswa/tambah"> tambah data</a>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit data</title>
</head>

<body>
    <a href="/mahasiswa">kembali</a>
    @foreach ($belajar as $x)
    <form action="/mahasiswa/update" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td><input type="hidden" name="id" required="required" value="{{ $x->id_mahasiswa }}"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td><input type="number" name="nim" required="required" value="{{ $x->nim_mahasiswa }}"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required="required" value="{{ $x->nama_mahasiswa }}"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="text" name="semester" required="required" value="{{ $x->semester_mahasiswa }}"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" required="required" value="{{ $x->alamat_mahasiswa }}"></td>
            </tr>
        </table>
        <input type="submit" value="simpan data"></input>
    </form>
    @endforeach
</body>

</html>
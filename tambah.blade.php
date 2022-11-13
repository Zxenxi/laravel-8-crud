<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form tambah</title>
    <style></style>
</head>

<body>
    <a href="/mahasiswa">kembali</a>

    <form action="/mahasiswa/inputdb" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Nim</td>
                <td><input type="number" name="nim" required="required"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="text" name="semester" required="required"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input name="alamat" required="required"></td>
            </tr>
        </table>
        <input type="submit" value="simpan data"></input>
    </form>
</body>

</html>
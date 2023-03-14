<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajr form ></form></title>
    <style>
        .btn-k{
            background:green;
            color:wihte;
            padding: 5px;
            border:0;
            border-radius:10px;
        }
        .btn-r{
            background:red;
            color:wihte;
            padding: 5px;
            border:0;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="post.php" method="post">
        <!-- type teks -->
             <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>
        <!-- type radio -->
             <label for="">Jenis kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki laki"><label for="">Laki-Laki</label>
        <input type="radio" name="jenis kelamin"value="Perempuan"><label for="">Perempuan</label><br><br>
        <!-- tipe chekbox -->
             <label for="">Mata kuliah</label><br>
        <input type="checkbox" name="matkul" value="Matkom">
             <label for="">Matkom</label><br>
        <input type="checkbox" name="matkul" value="Pemweb 2">
             <label for="">Pemweb 2</label><br><br>
        <!-- tipe number -->
            <label for="">NO TELP</label>
        <input type="Number" name="nomer_telepon"><br><br>
        <!-- button -->
        <button type="submit" class="btn-k">Kirim</button>
        <button type="reset" class="btn-r">Reset data/button>
    </form>
</body>
</html>
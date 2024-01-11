<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel 10</title>
    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0px;
        }
        table, th, td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>Data Siswa</h1> 
    <a href=" <?php echo e(route('siswa.index')); ?>">Kembali</a><br><br>
    <form action="<?php echo e(route('siswa.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> <!-- <?php echo e(csrf_field()); ?> -->
        <label>Nama Siswa</label><br>
        <input type="text" name="nama"> <br><br>
        <label>JK</label><br>
        <select name="jk" required>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br><br>
        <label>Kelas</label><br>
        <select name="kelas" required>
            <option>Pilih Kelas</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <br><br>
        <label>Jurusan</label><br>
        <select name="jurusan" required>
            <option>Pilih Jurusan</option>
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="TKR">TKR</option>
        </select>
        <br><br>
        <label>Foto Siswa</label><br>
        <input type="file" name="image">
        <br><br>
        <button type="submit">SIMPAN DATA</button>
        <button type="reset">RESET FORM</button>
    </form>
</body>
</html><?php /**PATH C:\xampp9\htdocs\cd_iqlima\resources\views/siswa/create.blade.php ENDPATH**/ ?>
<h1>Edit Siswa</h1>
<a href=" {{ route('siswa.index') }}">Kembali</a><br><br>

<form action="{{ route('siswa.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <label>Nama Siswa</label><br>
    <input type="text" name="nama" value="{{ old('nama', $post->nama) }}"><br><br>
    <label>JK</label>
    <select name="jk" required>
        <option>Pilih JK</option><br>
        <option {{ 'laki-laki' == $post->jk ? 'selected' : ''}} value="Laki-laki">Laki-laki</option>
        <option {{ 'perempuan' == $post->jk ? 'selected' : ''}} value="Permpuan">Perempuan</option>
    </select>
    <br><br>
    <label>kelas</label><br>
    <select name="kelas" required>
        <option>Pilih Kelas</option>
        <option {{ '10' == $post->kelas ? 'selected' : ''}} value="10">10</option>
        <option {{ '11' == $post->kelas ? 'selected' : ''}} value="11">11</option>
        <option {{ '12' == $post->kelas ? 'selected' : ''}} value="12">12</option>
    </select>
    <br><br>
    <label>Jurusan</label><br>
    <select name="jurusan" required>
        <option>Pilih Jurusan</option>
        <option {{ 'RPL' == $post->jurusan ? 'selected' : ''}} value="RPL">RPL</option>
        <option {{ 'TKJ' == $post->jurusan ? 'selected' : ''}} value="TKJ">TKJ</option>
        <option {{ 'TKR' == $post->jurusan ? 'selected' : ''}} value="TKR">TKR</option>
    </select>
    <br><br>
    <label>Foto Siswa</label><br>
    <input type="file" name="image">
    <br><br>
    <button type="submit">SIMPAN DATA</button>
    <button type="reset">RESET FORM</button>
</form>
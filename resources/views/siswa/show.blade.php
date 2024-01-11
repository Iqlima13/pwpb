<table>
    <tr>
        <td colspan="3" style="text-align: center;"><img src="{{ asset('storage/siswas/
            '.$siswa->image) }}" width="120px" alt=""></td>
    </tr>
    <tr>
        <th>Nama</th>
        <td>: {{ $siswa->nama }}</td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td>: {{ $siswa->jk }}</td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>: {{ $siswa->kelas }}</td>
    </tr>
    <tr>
        <th>Jurusan</th>
        <td>: {{ $siswa->jurusan }}</td>
    </tr>
</table>
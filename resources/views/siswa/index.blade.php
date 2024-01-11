@extends('siswa.header')

@section('content')
   <!-- <h1>Data Siswa</h1> 
   <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
     @csrf
    </form>
    <br> -->
    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>

    <table class="table">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        @forelse ($siswas as $siswa)
        <tr>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->jk }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->jurusan }}</td>
            <td>
                <img src="{{ asset('storage/siswas/'.$siswa->image) }}" width="120px" height="120px" alt="">
            </td>
            <td>
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                @csrf
                @method('DELETE')
                <button type="submit">HAPUS</button>
                 </form>
            </td>
        </tr>
        @empty
        @endforelse
    </table>
    {{ $siswas->links() }}
    @endsection

    @extends('siswa.footer')

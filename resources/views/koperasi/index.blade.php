@extends('layouts.dashboard')

@section('content')
    <div class="container">
        @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '{{ session('success') }}',
            });
        </script>
        
    @endif
    <div>
        <h2>Data Koperasi</h2>  
    </div>
    <div class="card">
        <div class="card-header">

            <form action="{{ route('koperasi.index') }}" method="GET" class="form-inline">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" name="search" placeholder="Cari Koperasi" value="{{ request('search') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-info mb-2">Cari</button>
            </form>

            <a href="{{ route('koperasi.create') }}" class="btn btn-primary btn-info mb-2">Tambah Koperasi</a>
        <table 
        class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($koperasi as $koperasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td> 
                        <td>{{ $koperasi->nama }}</td>
                        <td>{{ $koperasi->deskripsi }}</td>
                        <td>{{ $koperasi->alamat }}</td>
                        <td>
                            <a href="{{ route('koperasi.show', $koperasi->id) }}" class="btn btn-success btn-sm">
                                <i class="nav-icon fa fa-book "></i></a>
                            <a href="{{ route('koperasi.edit', $koperasi->id) }}" class="btn btn-warning btn-sm">
                                <i class="nav-icon fa fa-pen text-white "></i></a>


                            <form id="deleteForm{{$koperasi->id}}" action="{{ route('koperasi.destroy', $koperasi->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-id="{{ $koperasi->id }}" data-name="{{ $koperasi->nama }}" onclick="confirmDelete({{$koperasi->id}})">
                                        <i class="nav-icon fa fa-trash"></i>
                                    </button>
                            </form>
                                
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script>
      function confirmDelete(userId) {
    const dataName = document.querySelector(`.delete-btn[data-id="${userId}"]`).getAttribute('data-name');

    Swal.fire({
        title: 'Yakin menghapus?',
        text: `Anda akan menghapus data: ${dataName}. Tindakan ini tidak dapat dibatalkan!`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`deleteForm${userId}`).submit();
        }
    });
}

    </script>

@endsection

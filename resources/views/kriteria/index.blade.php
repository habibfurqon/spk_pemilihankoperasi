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
        <h2>Daftar Kriteria</h2>
        <div class="card"> 
            
             <div class="card-header">
                <a href="{{ route('kriteria.create') }}" class="btn btn-primary btn-info mb-2">Tambah Kriteria</a>  
                <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kriteria as $kriteria)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kriteria->nama }}</td>
                        <td>{{ $kriteria->nilai }}</td>
                        <td>
                           
                            <a href="{{ route('kriteria.edit', $kriteria->id) }}" class="btn btn-warning btn-sm">
                                <i class="nav-icon fa fa-pen text-white "></i></a>
                                <form id="deleteForm{{$kriteria->id}}" action="{{ route('kriteria.destroy', $kriteria->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-id="{{ $kriteria->id }}" data-name="{{ $kriteria->nama }}" onclick="confirmDelete({{$kriteria->id}})">
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

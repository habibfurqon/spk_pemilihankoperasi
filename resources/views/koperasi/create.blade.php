@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Tambah Koperasi</h2>
        @if ($errors->any())
        
            <script>
                var errorMessage = @json($errors->first());
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'harap isi semua kolom',
                });
            </script>
        @endif
        <form action="{{ route('koperasi.store') }}" method="POST" id="koperasiForm">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" onclick="validateForm()">Simpan</button>
        </form>
    </div>
    <script>
        function validateForm() {
            // Lakukan validasi di sini, contoh:
            var nama = document.getElementById('nama').value;
            var deskripsi = document.getElementById('deskripsi').value;
            var alamat = document.getElementById('alamat').value;

            if (!nama || !deskripsi || !alamat) {
                // Tampilkan SweetAlert jika validasi gagal
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Harap lengkapi semua kolom!',
                });
            }
        }
    </script>
@endsection

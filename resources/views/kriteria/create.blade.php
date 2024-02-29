<!-- resources/views/kriteria/create.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <h2>Tambah Kriteria</h2>

    <form action="{{ route('kriteria.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Kriteria:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <!-- tambahkan input untuk kolom lain sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary btn-info mb-2">Simpan</button>
        <a href="{{route('kriteria.index')}}" class="btn btn-primary btn-info mb-2">Kembali</a>
    </form>
@endsection

<!-- resources/views/kriteria/edit.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <h2>Edit Kriteria</h2>

    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Kriteria:</label>
            <input type="text" name="nama" class="form-control" value="{{ $kriteria->nama }}" required>
        </div>
        <!-- tambahkan input untuk kolom lain sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary btn-info mb-2">Simpan Perubahan</button>
        <a href="{{route('kriteria.index')}}" class="btn btn-primary btn-info mb-2">Kembali</a>
    </form>
@endsection

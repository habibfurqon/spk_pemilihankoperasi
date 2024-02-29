@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Edit Koperasi</h2>

        <form action="{{ route('koperasi.update', $koperasi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $koperasi->nama }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $koperasi->deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required>{{ $koperasi->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-info mb-2">Update</button>
            <a href="{{route('koperasi.index')}}" class="btn btn-primary btn-info mb-2">Kembali</a>
        </form>
    </div>
@endsection

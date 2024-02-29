@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <p><strong>ID:</strong> {{ $koperasi->id }}</p>
        <p><strong>Nama:</strong> {{ $koperasi->nama }}</p>
        <p><strong>Deskripsi:</strong> {{ $koperasi->deskripsi }}</p>
        <p><strong>Alamat:</strong> {{ $koperasi->alamat }}</p>
        <a href="{{ route('koperasi.index') }}" class="btn btn-info btn-secondary">Kembali</a>
    </div>
@endsection

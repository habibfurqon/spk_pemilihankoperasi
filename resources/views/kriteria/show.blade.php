@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div>
            <h3>Detail Kriteria</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nama: {{ $kriteria->nama }}</h5>
                    <p class="card-text">Deskripsi: {{ $kriteria->deskripsi }}</p>
                    <!-- Tambahkan informasi detail lainnya sesuai kebutuhan -->
                    <a href="{{ route('kriteria.index') }}" class="btn btn-secondary btn-info">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection

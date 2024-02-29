<!-- resources/views/perhitungan.blade.php -->

@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>Perhitungan AHP</h2>

        <!-- Formulir untuk perhitungan AHP -->
        <form action="{{ route('perhitungan.hitung') }}" method="post">
            @csrf
            <!-- Tambahkan input fields sesuai kebutuhan -->
            <!-- Contoh: perbandingan antar kriteria -->
            <div class="form-group">
                <label for="perbandingan">Perbandingan Antar Kriteria:</label>
                <!-- Contoh: mungkin ada input untuk memasukkan perbandingan -->
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        <!-- Tampilkan hasil perhitungan jika ada -->
        @if(session('hasilPerhitungan'))
            <h3>Hasil Perhitungan:</h3>
            <!-- Tampilkan hasil perhitungan sesuai kebutuhan -->
            <p>{{ session('hasilPerhitungan')['hasil'] }}</p>

            <!-- Contoh: menampilkan detail hasil -->
            @if(isset(session('hasilPerhitungan')['kriteria']))
                <h4>Detail Kriteria:</h4>
                <ul>
                    @foreach(session('hasilPerhitungan')['kriteria'] as $kriteria)
                        <li>{{ $kriteria->name }} - Bobot: {{ $kriteria->bobot }}</li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>
@endsection

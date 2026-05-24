@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
<h2>Hasil Pencarian: "<mark>{{ $keyword }}</mark>"</h2>
<hr>

@if (count($hasil) > 0)
    <div class="row">
        @foreach ($hasil as $kategori)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-warning">
                    <h5>{{ $kategori['nama'] }}</h5>
                </div>
                <div class="card-body">
                    <p>{{ $kategori['deskripsi'] }}</p>
                    <p><strong>Jumlah Buku:</strong> {{ $kategori['jumlah_buku'] }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('kategori.show', $kategori['id']) }}" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="alert alert-warning">
        Tidak ada kategori yang ditemukan untuk keyword "<strong>{{ $keyword }}</strong>"
    </div>
@endif

<a href="{{ route('kategori.index') }}" class="btn btn-secondary">← Kembali</a>
@endsection
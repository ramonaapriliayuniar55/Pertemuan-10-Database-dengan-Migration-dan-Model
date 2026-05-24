@extends('layouts.app')

@section('title', 'Detail Kategori')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
        <li class="breadcrumb-item active">{{ $kategori['nama'] }}</li>
    </ol>
</nav>

<div class="card mb-4">
    <div class="card-header bg-success text-white">
        <h4>{{ $kategori['nama'] }}</h4>
    </div>
    <div class="card-body">
        <p><strong>Deskripsi:</strong> {{ $kategori['deskripsi'] }}</p>
        <p><strong>Jumlah Buku:</strong> {{ $kategori['jumlah_buku'] }}</p>
    </div>
</div>

<h5>Daftar Buku dalam Kategori ini:</h5>
<table class="table table-striped">
    <thead class="table-success">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buku_in_kategori as $index => $buku)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $buku['judul'] }}</td>
            <td>{{ $buku['pengarang'] }}</td>
            <td>{{ $buku['tahun'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('kategori.index') }}" class="btn btn-secondary">← Kembali</a>
@endsection
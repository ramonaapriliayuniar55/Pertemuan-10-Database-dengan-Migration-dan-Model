@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('anggota.index') }}">Anggota</a></li>
        <li class="breadcrumb-item active">Detail Anggota</li>
    </ol>
</nav>

<div class="card">
    <div class="card-header bg-primary text-white">
        <h4>Detail Anggota</h4>
    </div>
    <div class="card-body">
        <table class="table table-borderless">
            <tr><th width="200">Kode Anggota</th><td>: {{ $anggota_list[$id]['kode'] }}</td></tr>
            <tr><th>Nama Lengkap</th><td>: {{ $anggota_list[$id]['nama'] }}</td></tr>
            <tr><th>Email</th><td>: {{ $anggota_list[$id]['email'] }}</td></tr>
            <tr><th>Telepon</th><td>: {{ $anggota_list[$id]['telepon'] }}</td></tr>
            <tr><th>Alamat</th><td>: {{ $anggota_list[$id]['alamat'] }}</td></tr>
            <tr>
                <th>Status</th>
                <td>: 
                    @if ($anggota_list[$id]['status'] == 'Aktif')
                        <span class="badge bg-success">Aktif</span>
                    @else
                        <span class="badge bg-danger">Non-Aktif</span>
                    @endif
                </td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
<h2>Daftar Kategori Buku</h2>

{{-- Form Search --}}
<div class="row mb-4">
    <div class="col-md-6">
        <form action="" method="GET" id="searchForm">
            <div class="input-group">
                <input type="text" 
                       class="form-control" 
                       placeholder="Cari kategori..." 
                       id="searchInput">
                <button class="btn btn-primary" 
                        type="button" 
                        onclick="searchKategori()">
                    Cari
                </button>
            </div>
        </form>
    </div>
</div>

<hr>
<div class="row">
    @foreach ($kategori_list as $kategori)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-header bg-success text-white">
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

<script>
function searchKategori() {
    const keyword = document.getElementById('searchInput').value;
    if (keyword.trim() !== '') {
        window.location.href = '/kategori/search/' + keyword;
    }
}

// Enter key support
document.getElementById('searchInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        searchKategori();
    }
});
</script>
@endsection
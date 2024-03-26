@extends('template')
@section('judul_halaman','')
@section('konten')

<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card-border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('perpustakaan.update', $perpustakaan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
<label class="font-weight-bold">judul buku</label>
<input type="text" class="form-control @error('judul_buku') is-invalid @enderror" name="judul_buku" value="{{old('judul_buku', $perpustakaan->judul_buku)}}" placeholder="judul_buku">
</div>

<div class="form-group">
    <label class="font-weigh-bold">penerbit</label>
<input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{old('penerbit', $perpustakaan->penerbit)}}" placeholder="penerbit">
</div>

    <div class="form-group">
<label class="font-weight-bold">jumlah buku</label>
<input type="text" class="form-control @error('jumlah_buku') is-invalid @enderror" name="jumlah_buku" value="{{old('jumlah_buku', $perpustakaan->jumlah_buku)}}" placeholder="jumlah_buku">
    </div>


<button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
<button type="reset" class="btn btn-md btn-warning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection

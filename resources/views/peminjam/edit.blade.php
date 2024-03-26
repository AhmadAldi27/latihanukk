@extends('template')
@section('judul_halaman','')
@section('konten')

<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card-border-0 shadow rounded">
<div class="card-body">
<form action="{{ route('pinjam.update', $pinjam->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
<label class="font-weight-bold">user_id</label>
<input type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{old('user_id', $perpustakaan->user_id)}}" placeholder="user_id">
</div>

<div class="form-group">
    <label class="font-weigh-bold">buku_id</label>
<input type="text" class="form-control @error('buku_id') is-invalid @enderror" name="buku_id" value="{{old('buku_id', $perpustakaan->buku_id)}}" placeholder="buku_id">
</div>

    <div class="form-group">
<label class="font-weight-bold">tgl_pinjam</label>
<input type="text" class="form-control @error('tgl_pinjam') is-invalid @enderror" name="tgl_pinjam" value="{{old('tgl_pinjam', $perpustakaan->tgl_pinjam)}}" placeholder="tgl_pinjam">
    </div>

    <div class="form-group">
<label class="font-weight-bold">tgl_kembali</label>
<input type="text" class="form-control @error('tgl_kembali') is-invalid @enderror" name="tgl_kembali" value="{{old('tgl_kembali', $perpustakaan->tgl_kembali)}}" placeholder="tgl_kembali">
    </div>

    <div class="form-group">
<label class="font-weight-bold">pengurus</label>
<input type="text" class="form-control @error('pengurus') is-invalid @enderror" name="pengurus" value="{{old('pengurus', $perpustakaan->pengurus)}}" placeholder="pengurus">
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

@extends('template')
@section('konten')
    <body style="background:lightgray">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('perpustakaan.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">judul buku</label>
                                <input type="text" class="form-control @error('judul_buku')
                                is-invalid
                                @enderror" name="judul_buku" value="{{old('judul_buku')}}" id="judul_buku" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input type="text" class="form-control @error('penerbit')
                                is-invalid
                                @enderror" name="penerbit" value="{{old('penerbit')}}" id="penerbit" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Jumlah buku</label>
                                <input type="text" class="form-control @error('jumlah_buku')
                                is-invalid
                                @enderror" name="jumlah_buku" value="{{old('jumlah_buku')}}" id="jumlah_buku" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Save</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
@extends('template')
@section('konten')
    <body style="background:lightgray">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('pinjam.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">user_id</label>
                                <input type="text" class="form-control @error('user_id')
                                is-invalid
                                @enderror" name="user_id" value="{{old('user_id')}}" id="user_id" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">buku_id</label>
                                <input type="text" class="form-control @error('buku_id')
                                is-invalid
                                @enderror" name="buku_id" value="{{old('buku_id')}}" id="buku_id" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">tgl_pinjam </label>
                                <input type="date" class="form-control @error('tgl_pinjam')
                                is-invalid
                                @enderror" name="tgl_pinjam" value="{{old('tgl_pinjam')}}" id="tgl_pinjam" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">tgl kembali </label>
                                <input type="date" class="form-control @error('tgl_kembali')
                                is-invalid
                                @enderror" name="tgl_kembali" value="{{old('tgl_kembali')}}" id="tgl_kembali" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">pengurus </label>
                                <input type="text" class="form-control @error('jumlah_buku')
                                is-invalid
                                @enderror" name="pengurus" value="{{old('pengurus')}}" id="pengurus" placeholder="">
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
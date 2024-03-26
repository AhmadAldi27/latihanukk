@extends('template')
@section('konten')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{route('pinjam.create')}}" class="btn btn-md- btn-success">Tambah</a>
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">user_id</th>
                                    <th scope="col">buku_id</th>
                                    <th scope="col">tgl_pinjam</th>
                                    <th scope="col">tgl_kembali</th>
                                    <th scope="col">pengurus</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pinjams as $item)
                                    <tr>
                                        <td>{{$item->user_id}}</td>
                                        <td>{{$item->buku_id}}</td>
                                        <td>{{$item->tgl_pinjam}}</td>
                                        <td>{{$item->tgl_kembali}}</td>
                                        <td>{{$item->pengurus}}</td>
                                        <td><form onsubmit="return confirm('Apakah Anda Yakin?')" action="{{route('pinjam.destroy', $item->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('pinjam.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-md btn-danger">Hapus</button>
                                        </form></td>
                                    </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Kosong
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('template')
@section('konten')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{route('perpustakaan.create')}}" class="btn btn-md- btn-success">Tambah</a>
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">judul buku</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">jumlah buku</th>
                                    <th scope="col"></th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pustakas as $item)
                                    <tr>
                                        <td>{{$item->judul_buku}}</td>
                                        <td>{{$item->penerbit}}</td>
                                        <td>{{$item->jumlah_buku}}</td>
                                        <td></td>
                                        <td><form onsubmit="return confirm('Apakah Anda Yakin?')" action="{{route('perpustakaan.destroy', $item->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('perpustakaan.edit', $item->id)}}" class="btn btn-primary">Edit</a>
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
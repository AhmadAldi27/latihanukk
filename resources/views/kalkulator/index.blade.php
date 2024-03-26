@extends('template')
@section('konten')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
<center>
    <h1>kalkulator sederhana</h1>
    <form action="{{route('hitung')}}" method="post">
                            @csrf
                            <input type="number" name="angka1" placeholder="Input Angka 1"><br>
                            <input type="number" name="angka2" placeholder="Input Angka 2"><br>
                            <input type="submit" value="kali" name="operator" class="btn btn-primary">
                            <input type="submit" value="bagi" name="operator" class="btn btn-warning">
                            <input type="submit" value="tambah" name="operator" class="btn btn-warning">
                            <input type="submit" value="kurang" name="operator" class="btn btn-warning">
                        </form>
</center>
        
    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

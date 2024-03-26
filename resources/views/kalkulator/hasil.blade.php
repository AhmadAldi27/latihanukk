@extends('template')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="car">
   <div class="card-body">
    <h1>kalkulator sederhana</h1>
    <centar>
    <form action="{{route('hitung')}}" method="post">
                            @csrf
                            <input type="number" name="angka1" placeholder="Input Angka 1"><br>
                            <input type="number" name="angka2" placeholder="Input Angka 2"><br>
                            <input type="submit" value="kali" name="operator" class="btn btn-warning">
                            <input type="submit" value="bagi" name="operator" class="btn btn-warning">
                            <input type="submit" value="tambah" name="operator" class="btn btn-warning">
                            <input type="submit" value="kurang" name="operator" class="btn btn-warning">
                        </form>

<h1>{{$hasil}}</h1>
</centar>
</centar>
</div>
</div>





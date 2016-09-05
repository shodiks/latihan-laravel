@extends('templates.index')
@section('content')

<h4>Lihat Data</h4>
ID : {{ $tampilkan->id }}, <br>
Judul : {{ $tampilkan->judul }}, <br>
Deskripsi : {{ $tampilkan->deskripsi }} <br>
@stop
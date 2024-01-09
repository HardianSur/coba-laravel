@extends('layouts.main')

@section('container')
    <h1>Halaman about</h1>
    <h3>{{  $nama }}</h3>
    <h3>{{ $email }}</h3>
    <img src="assets/{{ $image }}" alt="" class="img-thumbnail rounded-circle">
@endsection
    

@extends('dashboard.layouts.main')

@section('container')
<h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
@endsection
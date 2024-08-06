@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="container">
    <div class="position-absolute start-50 top-50 translate-middle">
        <h1>Selamat Datang Di Aplikasi Katering</h1>
        <p>This is a simple website created using Laravel and Bootstrap.</p>
        <div class="card card-body">
            <a type="button" href="{{ route('merchantregister') }}" class="btn btn-primary">Login Sebagai Vendor Katering</a>
            <hr>
            <a type="button" href="{{ route('customerregister') }}" class="btn btn-primary">Login Sebagai Perusahaan</a>
        </div>
    </div>
</div>
@endsection
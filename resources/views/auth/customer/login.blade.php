@extends('app')

@section('title', 'Login Customer')

@section('content')
<div class="container">
    <div class="position-absolute start-50 top-50 translate-middle">
        <h1>Login Customer</h1>
        <p>Silahkan Masukan Data Yang Diperlukan</p>
        <div class="card card-body">
            <form action="{{ route('customerlogin') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword1">
                    @error('username')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                @error('password')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="{{ route('customerregister') }}" class="btn btn-warning">Registrasi Akun</a>
        </div>
    </div>
</div>
@endsection
@extends('layouts.main')

@section('container')
    <div class="row justify-content-center ">
        <div class="col-lg-4">
            <main class="form-registration w-100 m-auto ">
                <form action="/register" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Registation Form</h1>

                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name')is-invalid @endError" id="name"
                            placeholder="name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username')is-invalid @endError""
                            id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email')is-invalid @endError""
                            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password')is-invalid @endError"" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already Registed? <a href="/login">Login Now!</a></small>
            </main>
        </div>
    </div>
@endsection

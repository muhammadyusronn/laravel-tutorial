@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required
                            autofocus>
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <small class="d-block text-center mt-3"> Not Registered? <a href="/register"
                            class="text-decoration-none">Register
                            Now</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection

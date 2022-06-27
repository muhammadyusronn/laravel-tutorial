@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="register-signin">
                <form>
                    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                    <div class="form-floating mb-2">
                        <input type="text" name="name" class="form-control" id="floatingInputName" placeholder="Name"
                            required>
                        <label for="floatingInputName">Name</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" name="username" class="form-control" id="floatingInputUsername"
                            placeholder="Username" required>
                        <label for="floatingInputUsername">Username</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control" id="floatingInputEmail"
                            placeholder="name@example.com" required>
                        <label for="floatingInputEmail">Email address</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" name="pasword" class="form-control" id="floatingPassword"
                            placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                    <small class="d-block text-center mt-3"> Already Registered?
                        <a href="/login" class="text-decoration-none">Login </a>
                    </small>
                </form>
            </main>
        </div>
    </div>
@endsection

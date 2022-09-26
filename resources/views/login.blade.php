<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="login.js">

    </script>
    <style>

    </style>
    <title>Login</title>
</head>

<body>
    <main>
        <div class="d-flex align-items-center justify-content-center">
            
            <form id="login-form" action="/login" method="post" class="card">
                <div class="card-header text-center">Login</div>
                <div class="card-body">
                    {{-- register validation when fail --}}
                    @if ($errors->has("username_register")||$errors->has("password_register")||$errors->has("name"))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Register Failed!</strong> You should check in on some of register fields.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- register validation when success --}}
                    @if ($message=Session::get("register_success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="username"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="40" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg></span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="Username">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="password"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="40" fill="white" class="bi bi-key-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg></span>
                        <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                            aria-describedby="Username">
                    </div>
                    <button class="btn btn-success loginButton">
                        Login
                    </button><span id="ask">Don't have an account?<span> <a href="#register"
                                id="register-form-link">Register
                                here</a></span></span>
                </div>
                @csrf
            </form>

            <form action="/register" method="post" class="card" id="register-form" style="display: none;">
                <div class="card-header text-center">Register</div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="name" class="col-4 col-form-label">Name</label>
                        <div class="col-8">
                            <input type="text" class="form-control @error("name") is-invalid @enderror" id="name"
                                name="name" required value="{{old("nama")}}">
                                @error("name")
                                <div class="text-danger">
                                    <span class="text-danger">{{$message}}</span>
                                </div>
                                @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Username" class="col-4 col-form-label">Username</label>
                        <div class="col-8">
                            <input type="text" class="form-control @error("username_register") is-invalid @enderror"
                                id="Username" name="username_register" value="{{old("username_register")}}" required >
                            @error("username_register")
                            <div class="text-danger">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Password" class="col-4 col-form-label">Password</label>
                        <div class="col-8">
                            <input class="form-control @error('password_register')is-invalid @enderror" type="password" name="password_register" id="input_password" value="{{old("password_register")}}">
                            @error("password_register")
                            <div class="text-danger">
                                <span class="text-danger">{{$message}}</span>
                            </div>
                            @enderror
                        </div>
                    </div>
                    
                    
                    <input type="checkbox" onclick="showPassword()" id="show_pass">  <label for="show_pass">Show Password</label>
                    <p></p>
                    <button class="btn btn-success loginButton">
                        Register
                    </button><span id="ask">Already have an account?<span> <a href="#"
                                id="login-form-link">Login</a></span></span>
                </div>
                @csrf
            </form>

        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>
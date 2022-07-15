<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/vendors/bootstrap/login/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if(session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <form action="/login" method="post">
    @csrf
    <img class="mb-4" src="/images/LOGO-SD2.png" alt="" width="50">
    <h1 class="h3 mb-3 fw-normal">Login Form</h1>

    <div class="form-floating">
      <input type="email" class="form-control rounded-top" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" autofocus required>
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback" style="margin-bottom: 20px; margin-top: 1px;">
          {{ $message }}
        </div>
      @enderror('email')
    </div>

  
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback" style="margin-bottom: 20px; margin-top: 1px;">
          {{ $message }}
        </div>
      @enderror('password')
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
  </form><br>
  <small class="d-block text-center">Not register? <a href="/register">Register!</a></small>
</main>


    
  </body>
</html>

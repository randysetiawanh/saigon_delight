<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Register</title>

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
    
<main class="form-signin" style="max-width: 700px;">
  <form action="/register" method="post" enctype="multipart/form-data" >
    @csrf
    <img class="mb-4" src="/images/LOGO-SD2.png" alt="" width="50">
    <h1 class="h3 mb-3 fw-normal">Register Form</h1>

    <div class="form-floating">
      <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
      name="name" placeholder="Input name" value="{{ old('name') }}" required>
      <label for="name">Name</label>
      @error('name')
        <div class="invalid-feedback" style="margin-bottom: 20px; margin-top: 1px;">
          {{ $message }}
        </div>
      @enderror('name')
    </div>


    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
      name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback" style="margin-bottom: 20px; margin-top: 1px;">
          {{ $message }}
        </div>
      @enderror('email')
    </div>

    <div class="form-floating">
      <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
      name="password" placeholder="Input Password" required>
      <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback" style="margin-bottom: 20px; margin-top: 1px;">
          {{ $message }}
        </div>
      @enderror('password')
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
  </form><br>
  <small class="d-block text-center">Already register? <a href="/login">Login!</a></small>
</main>


    
  </body>
</html>

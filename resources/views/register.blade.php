<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 10 Custom Login and Registration - Register Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>
</head>
<style>
    body{
        font-family: sans-serif;
        background: #d5f0f3;
        background-image: url(http://localhost/nusantara/img/hihi.jpg);
        background-size: cover;
    }
</style>
<body>
<div class="row justify-content-center mt-5">
<div class="col-lg-4">
<div class="card">
<div class="card-header">
<h1 class="card-title text-center">Register</h1>
</div>
<div class="card-body">
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{ Session::get('success') }}
</div>
@endif
<form action="{{ url('register') }}" method="POST">
@csrf
<div class="form-group mb-3">
<input type="text" placeholder="Name" id="name"

class="form-control" name="name"

required autofocus>
@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span>

@endif
</div>
<div class="form-group mb-3">
<input type="text" placeholder="Email"

id="email_address" class="form-control"

name="email" required autofocus>
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>

@endif
</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password"

id="password" class="form-control"

name="password" required>
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>
<div class="form-group mb-3">
<div class="checkbox">
</div>
</div>
<div class="mb-3">
<div class="d-grid">

<button class="btn btn-primary">Register</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
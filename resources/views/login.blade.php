<!DOCTYPE html>
<html>
<head>
<title>loginSaya</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
<h1 class="card-title text-center">Login</h1>
</div>
<div class="card-body">
@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
{{ Session::get('error') }}
</div>
@endif
<form action="{{ route('login') }}" method="POST">
@csrf
<div class="form-group mb-3">
<input type="text" placeholder="Email"

id="email" class="form-control" name="email" required

autofocus>
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>

@endif
</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password"

id="password" class="form-control" name="password" required>
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>
<div class="form-group mb-3">
<div class="checkbox">
<label>
<input type="checkbox" name="remember">

Remember Me

</label>
</div>
</div>
<div class="mb-3">
<div class="d-grid">

<button class="btn btn-success">Login</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
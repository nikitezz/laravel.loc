<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<style>
    .container{
        display: flex;
        justify-content: center;
    }
</style>
<div class="container">
    <form method="post" action="{{route('login')}}">

        @csrf

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>

    </form>
</div>
</body>
</html>

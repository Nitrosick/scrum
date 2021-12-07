<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="wrapper">
        <div class="form-table">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label" :value="__('Email')">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" :value="old('email')" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" :value="__('Password')">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required autocomplete="current-password">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="remember">
                    <label for="flexCheckDefault">
                      Remember me
                    </label>
                  </div>
                  @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="color:black">Forgot your password?</a>
                @endif
                <button type="submit" class="btn btn-primary">Log in</button>
            </form>
        </div>
        <div class="descr">
            <div class="text">
                <h1>Gotta Watch</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, praesentium dolores? Culpa fuga atque
                    veniam similique perspiciatis sit, doloribus reprehenderit praesentium? Doloremque, debitis officia
                    dignissimos pariatur nulla nemo perspiciatis dolore.</p>
            </div>

        </div>
    </div>
</body>

</html>

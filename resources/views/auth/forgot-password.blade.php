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
            <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label" :value="__('Email')">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" :value="old('email')" required autofocus>
                </div>


                <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
            </form>
        </div>
        <div class="descr">
            <div class="text">
                <h1>Gotta Watch</h1>
                <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
            </div>

        </div>
    </div>
</body>

</html>

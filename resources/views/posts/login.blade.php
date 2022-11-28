<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
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
        body{
            background-image: url("https://gradients.app/public/img/gradients_app.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        img.mb-4 {
            width: 212px;
            margin-bottom: -1.5rem!important;
        }
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            margin-bottom: 25%;
        }
        button {
            width: 100%;
            background: black;
            color: #e2e8f0;
            height: 50px;
            border-radius: 11px;
            border: none;
            font-weight: 700;
        }

        button:hover{
            background: whitesmoke;
            color: black;
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="#" rel="stylesheet">
</head>
<body class="text-center">
<main class="form-signin">
    <form method="post" action="{{route('login')}}">
        @csrf
        <img class="mb-4" src="https://stickerly.pstatic.net/sticker_pack/mKuuZnqwNpYjwAwBxKpEg/EJMJ92/35/07849577-7373-41ee-b3ef-13403bbb790e.png">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="button" type="submit">Sign in</button>

    </form>
</main>



</body>
</html>

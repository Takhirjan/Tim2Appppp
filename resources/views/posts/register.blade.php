<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

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
        html,
        body {
            height: 100%;
            background-size: cover;
          background-repeat: no-repeat;
            background-image: url("https://kartinkin.net/uploads/posts/2021-07/thumbs/1625652889_58-kartinkin-com-p-chernie-oboi-krasivie-59.jpg");
        }
.h1{
    font-size: 30px;
    color: #e2e8f0;
    font-family: cursive;
}
a{
    text-decoration: none;
}
        .form-floating {
            position: relative;
            color: darkred;
            box-shadow: 1px 9px 10px -2px;
        }
        .form-control{
    border-radius: 0.1rem;
}
        img.mb-4 {
            width: 212px;
            margin-bottom: 0.5rem!important;
        }

    </style>


    <!-- Custom styles for this template -->

</head>
<body class="text-center">
@if(session('status'))
    {{session('status')}}
@endif
<main class="form-signin">

    <form action="{{route('user.create')}}" method="post">
        @csrf
        <img class="mb-4" src="https://stickerly.pstatic.net/sticker_pack/NitvGoALM0AeBwG7157w/IWWFBB/2/fc064e0b-a041-4b88-b2b2-25dc6e1e6f93.png">

        <h1 class="h1">Регистрация</h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="input your name">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" name="confirm_password" class="form-control" id="floatingConfirmPassword" placeholder="confirm_password">
            <label for="confirmPassword">confirm_password</label>
        </div>



        <button class="w-100 btn btn-lg btn-danger" type="submit"> Зерегистрироваться</button>
        <a href="{{route('auth')}}">  <p class="mt-5 mb-3 text-white">Есть аккаунт?</p></a>
    </form>
</main>
</body>
</html>

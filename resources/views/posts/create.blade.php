
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../../css/create.css">
<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create a form</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none link">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/640px-Instagram_logo.svg.png" width="150px">
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('posts.follow')}}" class="nav-link ">Подписки</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Подписчики</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Reels</a></li>
            <li class="nav-item"><a href="#" class="nav-link">HELP</a></li>
            <li class="nav-item"><a href="{{route('posts.newprofile')}}" class="nav-link active ">Мой аккаунт</a></li>
        </ul>
    </header>
</div>
</div>

<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
            <label for="fname">Добавить Пост:</label>
            <input type="text" id="fname" name="title" placeholder="Тематика поста">

            <label for="lname">Контент</label>
            <input type="text" id="lname" name="content" placeholder="Описание">
            <input type="file" placeholder="Choose an image" name="image">

            <input type="submit" value="Опубликовать">

        </form>
       <button type="button"  class="btn btn-primary"> <a href="{{route('posts.index')}}">Go to the index page</a></button>
    </div>
</body>
</html>

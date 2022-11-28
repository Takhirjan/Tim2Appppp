<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LAravel</title>
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="rv">
<div>
    <a href="{{route('posts.index')}}">Go to the index Page</a>
</div>
<div class="container">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="/storage/{{$post->image}}" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">{{$post->title}}</h4>
                <p class="card-text">{{$post->content}}</p>
                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
</body>
</html>

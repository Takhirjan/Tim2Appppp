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
    <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">MASTER</strong>
                    <h3 class="mb-0">{{$post->title}}</h3>

                    <p class="mb-auto">{{$post->content}}.</p>
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>

                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="250" height="260"

                         src="/storage/{{$post->image}}"
                         role="img">

                </div>
            </div>
    </div>
</div>
</body>
</html>

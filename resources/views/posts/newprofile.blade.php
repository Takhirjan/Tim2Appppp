<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>
        Profile
    </title>
<style>
    h1{

        font-size: 30px;
        width: 30%;
        margin-left: 38%;
        margin-top: -40px;
    }
    img.img {
        width: 3%;
        margin-right: 20%;
    }
    a{
        text-decoration: none;
        color:black;
    }
    a:hover{
        color:black;
    }
    </style>
<body>

<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
   <a href="{{route('posts.create')}}"> <img class="img" src="https://cdn-icons-png.flaticon.com/512/93/93634.png">
       <h1>Вернуться на главную</h1></a>
    <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this
        Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div>
</body>

<main>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Чашка кофе</h4>
                </div>
                <div class="card-body">

                    <img src="https://7oom.ru/wp-content/uploads/sochinenie-na-temu-osen-01.jpg" width="100%">

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Прекрасный вид</h4>
                </div>
                <div class="card-body">
                  <img src="https://otyrar.kz/wp-content/uploads/2021/09/osen1_n.jpg" width="80%">

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm y">
                <div class="card-header py-3 text-black">
                    <h4 class="my-0 fw-normal">Осень в парке</h4>
                </div>
                <div class="card-body">
                  <img src="https://celes.club/uploads/posts/2021-12/1640372851_1-celes-club-p-skoro-osen-priroda-krasivo-foto-1.jpg" width="80%">
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
    </head>
</html>


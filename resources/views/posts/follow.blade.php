<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=".././css/create.css">
    <title>Laravel</title>
</head>
<style>
    body{

        /*background-color: rgba(0, 0, 0, 0.7);*/
        background-image:url("/images/image.png");


    }
    .buttons{
        width: 30%;
        display: block;
        margin-top: -42%;
        position: relative;
        float: right;

    }
    button{
        background-color: blue;
        color: #e2e8f0;
        border-radius: 10px;
        border: 1px;
        line-height: 18px;
    }
    img.button2{
    width: 5%;
    position: relative;
    margin-left: 64%;
    bottom: 3%;
    }
    p2 {
        margin-left: 8px;
        position: relative;
        bottom: 8px;
    }
</style>

<body>
<div class="overlay">
    <div class="box">
    <h1>Ваши подписки</h1>
        <ul class="photos">
            <image src="https://rg.ru/uploads/images/177/18/63/1000s.jpg" class="person"></image>
            <image src="https://img2.akspic.ru/previews/2/9/0/9/6/169092/169092-sipuha-neyasyt-ptica-klyuv-naturalnyj_material-500x.jpg" class="person"></image>
            <image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyin09f-OAcsj4AHwm-3yckPuFQUNne-ZHVB3zLrrHurM0wi4Jh--fg9OW47kxcmGBvDM&usqp=CAU" class="person"></image>
            <image src="https://i.pinimg.com/236x/8f/2d/0b/8f2d0b1395ede21682ce047303a76416.jpg" class="person"></image>
            <image src="https://www.iguides.ru/upload/medialibrary/9f8/9f8fdff471b7d281f81f694c100b5adc.png" class="person"></image>
            <image src="https://i.pinimg.com/736x/dd/f4/4e/ddf44e5f86dbbc840e7ced72e0fcf840.jpg" class="person"></image>
            <image src="https://vypechka-online.ru/wp-content/uploads/2019/09/d12d35ae1ebc70bae05f22c76ca442c3.jpg" class="person"></image>
            <image src="https://kartinkin.net/uploads/posts/2022-02/1645493615_1-kartinkin-net-p-chetkie-kartinki-1.jpg" class="person"></image>
        </ul>

        <ul>
            <li class="li">Гондаренко Лена</li>

            <li class="li">Ашимов Султан</li>
            <li class="li">Досов Ильяс</li>
            <li class="li">Турков Хан</li>
            <li class="li">Гена Васильев</li>
            <li class="li">Спинова Елена</li>
            <li class="li">Мияги Музыкант</li>
            <li class="li">Счастливый Человек</li>
        </ul>
        <div class="buttons">

            <button type="button" class="button">Отписаться</button>
            <button type="button" class="button">Отписаться</button>
            <button type="button" class="button">Отписаться</button>
            <button type="button" class="button">Отписаться</button>
            <button type="button" class="button">Отписаться</button>
            <button type="button" class="button">Отписаться</button>
            <button type="button" class="button">Отписаться</button>
            <button type="button" class="button">Отписаться</button>

        </div>
        <a href="{{route('posts.create')}}" > <img class="button2 "src="https://cdn-icons-png.flaticon.com/512/93/93634.png?w=360"><p2>Назад</p2></a>
    </div>


</div>
</div>
</body>
</html>

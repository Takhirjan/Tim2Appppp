<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create a post</title>
</head>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>
<body>
<a href="{{route('posts.index')}}">Go to the index page</a>
<form action="{{route('posts.update', $post->id,)}}" method="post">
    @csrf
    @method('PUT')
    <form action="№">
        <label for="fname"> {{$post->title}}</label>
        <input type="text" id="fname" name="title" value="{{$post->title}}" placeholder="Тематика поста">

        <label for="lname">{{$post->content}}</label>
        <input type="text" id="lname" name="content" value="{{$post->content}}"placeholder="Описание">


        <input type="submit" value="Update post">
    </form>
{{--    Tittle: <input type="text" name="title" value="{{$post->title}}"><br>--}}
{{--    Content:<textarea name="content" cols="30" rows="10">{{$post->content}}</textarea>--}}
{{--    <button type ="submit">UPDATE POST</button>--}}
{{--</form>--}}
</body>
</html>


{{-- @include('header',['info'=>'Home file']) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration:none;
            font-size:25px;
        }
    </style>
</head>
<body>
    <h1>Feature A</h1>

    <a href="{{route('skt')}}">Skt Pages</a><br>
    <a href="{{route('featurea')}}">Feature a Pages</a><br>
    <a href="{{route('practice')}}">Practice Pages</a><br>
    <a href="{{route('welcome')}}">Welcome Pages</a><br>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> i am a shakaet</h1>


    @foreach($msg as $item)

    <h2>{{$item}}</h2>
 
    @endforeach
        


    {{-- <h1> welcome page- {{$msg}}- {{$name}}</h1> --}}


    
</body>
</html>
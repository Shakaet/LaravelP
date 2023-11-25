{{"Welcome"}}
<br>

@php

// $msg="Hello World";

$msg=["shakaet","akib","minhaz"];


@endphp

<ul>

@foreach ($msg as $i)

   @if($loop->odd)
{{-- <p style="color:blue">{{$i}}</p> --}}
    <p style="color:blue">{{$loop->iteration}}- {{$i}}</p>
   @else
{{-- <p style="color:red">{{$i}}</p> --}}
    <p style="color:red">{{$loop->iteration}}- {{$i}}</p>
   @endif

{{-- <li><p> {{$i}}</p></li> --}}
    
@endforeach
</ul>
{{-- {{$msg}} --}}
<h1> welcome</h1>

{!! "<h1>Welcome</h1>" !!}
{{-- @include('header',['info'=>$msg2]) --}}

@php


// $msg="Hello World";

$msg2=["abc,def"];

@endphp

@include('header',['info'=>$msg2])

<br>

{{"Welcome"}}
<br>

@php

// $msg="Hello World";

$msg=["abc,def"];


@endphp

<ul>

@foreach ($msg as $i)

@if($loop->odd)
{{-- <p style="color:blue">{{$i}}</p> --}}
<p style="color:blue">{{$loop->iteration}}- {{$i}}</p>
    
@else
{{-- <p style="color:red">{{$i}}</p> --}}
<p style="color:">{{$loop->iteration}}- {{$i}}</p>
@endif

<li><p> {{$i}}</p></li>
    
@endforeach
</ul>
{{-- {{$msg}} --}}
<h1> welcome</h1>

{!! "<h1>Welcome</h1>" !!}
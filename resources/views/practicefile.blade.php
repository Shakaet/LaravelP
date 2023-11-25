{{"Welcome"}}
<br>

@php

// $msg="Hello World";

$msg=["abc,def"];


@endphp

<ul>

@foreach ($msg as $i)

<li><p>{{$i}}</p></li>
    
@endforeach
</ul>
{{-- {{$msg}} --}}
<h1> welcome</h1>

{!! "<h1>Welcome</h1>" !!}
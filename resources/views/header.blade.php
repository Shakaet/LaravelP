<h1>Header Section - </h1>

@foreach ($info as $item)

   @if($loop->odd)
{{-- <p style="color:blue">{{$i}}</p> --}}
    <p style="color:blue">{{$loop->iteration}}- {{$item}}</p>
   @else
{{-- <p style="color:red">{{$i}}</p> --}}
    <p style="color:red">{{$loop->iteration}}- {{$item}}</p>
   @endif

{{-- <li><p> {{$i}}</p></li> --}}
    
@endforeach
</ul>
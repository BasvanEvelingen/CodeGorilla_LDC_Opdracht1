@extends('welcome')

@section('content')

<ul class="list-group">
    <li> {{$data['class']}} </li>
    <li> {{$data['result']}} </li  
</ul>


<ul class="list-group">
 
@foreach ($data['responses'][0]['objects'] as $question)
<li>{{$question['id']}} {{$question['name']}} </li>
@endforeach

</ul>


@endsection

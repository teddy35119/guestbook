@extends('index')
@section('content')
	@foreach($messages as $message)
		<div class="article">
				{{ $message->Content }}
				<div class="icon"><a href="#"><img src=images/reply.png></a> <a href="remove\{{ $message->id }}"><img src=images/trash.png></a></div>
		</div>
	@endforeach
@stop
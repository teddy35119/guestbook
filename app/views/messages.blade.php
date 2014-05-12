@extends('index')
@section('content')
	@foreach($messages as $message)
		<div class="article">
				{{ $message->Content }}
				<div class="icon">
					<a href="#replyLink">
						<img  class="replyIcon" data="{{ $message->id }}" src=images/reply.png >
					</a> 
					<a href="remove/message/{{ $message->id }}">
						<img src=images/trash.png>
					</a>
				</div>
			<hr />
			
			@foreach($replys as $reply)
			@if ( $reply->FatherId === $message->id)
				<p>{{ $reply->ReplyContent }}</p>
				<div class="Trashicon">
					<a href="remove/reply/{{ $reply->id }}">
						<img src=images/trash.png>
					</a>
				</div>
			@endif
			@endforeach
										
			<form id="ReplyForm" action="reply/{{ $message->id }}">
					<textarea name ="ReplySend" id="reply{{ $message ->id }}" class='reply'></textarea>
			</form>
		</div>
	@endforeach
	
@stop
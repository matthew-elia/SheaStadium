@extends('app')

@section('content')

<div class="container">
	<ul class="list-unstyled">
		@foreach($shows as $s)
			@if($s->post_content != "")
			<div class="well">
				<li><h2>{{ $s->post_title }}</h2></li>
			</div>
			@endif
		@endforeach
	</ul>
</div>
	
@endsection
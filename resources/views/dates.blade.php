@extends('app')

@section('content')

<div class="container">
	<ul class="list-unstyled">
		@foreach($dates as $d)
			@if($d->post_content != "")
			<div class="well">
				<li><h2>{{ $d->post_title }}</h2></li>
			</div>
			@endif
		@endforeach
	</ul>
</div>
	
@endsection
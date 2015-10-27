@extends('app')

@section('content')

<div class="container">
	<ul class="list-unstyled">
		@foreach($shows as $s)
		<li>
			<h2>{{ $s->post_title }}</h2>	
		</li>	
		@endforeach
	</ul>
</div>
	
@endsection
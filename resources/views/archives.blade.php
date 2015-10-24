@extends('app')

@section('content')

<div class="container">
	<ul class="unstyled-list">
		@foreach($bands as $b)
		<li><p>{{ $b->band_name }}</p></li>
		@endforeach
	</ul>
</div>
	
@endsection
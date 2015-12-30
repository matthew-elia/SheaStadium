@extends('app')

@section('content')

<style>
	
	li {
		min-height: 40px !important;
	}
	.page-header {
		padding-left:20px;
	}
	ul.pagination > li > a {
		color:black !important;
	}

</style>

<div class="container">
	<div id="content-wrapper" style="">

		@foreach($shows as $show)
			<div class="page-header">
			@foreach($show->show_meta as $sm)
				@if($sm->meta_key === 'show_date')
				<p>{{ $sm->meta_value }}</p>
				@endif
			@endforeach
			</div>
					
			<ul class="list-unstyled">
				<li>
					<h2>{{ $show->show_title }}</h2>
					@foreach($show->show_meta as $sm)
						@if($sm->meta_key === 'doors_at')
						<p>Doors at: {{ $sm->meta_value }}</p>
						@endif
						@if($sm->meta_key === 'cost')
						<p>{{ $sm->meta_value }}</p>
						@endif
					@endforeach
				</li>	
			</ul>

		@endforeach		

	</div>
	<div class="row text-center">
		{!! $shows->render() !!}
	</div>
</div>
	
@endsection
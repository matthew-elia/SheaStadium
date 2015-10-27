@extends('app')

@section('content')

<style>
	
	li {
		min-height: 40px !important;
	}
	.page-header {
		padding-left:20px;
	}

</style>

<div class="container">
	
	<div id="content-wrapper" style="">

		<div class="page-header">
	 	{{ $today }}	
		</div>


		@foreach($shows as $show)
		<div class="well" style="background-color:red;">
			<ul class="list-unstyled">
				<li>
					<h2>{{ $show->show_title }}</h2>
					<h2>{{ $show->meta }}</h2>
				</li>	
			</ul>
		</div>
		@endforeach
	</div>
</div>
	
@endsection
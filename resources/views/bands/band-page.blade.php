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

		<div id="band-page" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>{{ $band->post_title }}</h1>
				</div>
			</div>
			<div class="col-md-3">
				<div id="archives" style="height:300px;background-color:red;">
					
				</div>
			</div>
		</div>

	</div>

</div>

@endsection
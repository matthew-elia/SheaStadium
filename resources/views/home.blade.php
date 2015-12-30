@extends('app')

@section('content')
<div class="container" style="padding-top:10px;">

	<div class="row">
		<div class="col-md-9 col-xs-12">

			<div class="row">
				<div class="col-md-9">
					<div class="well" style="height:380px;background-color:black;">
						
					</div>
				</div>
						
				<div class="col-md-3" style="padding:0px">
					@foreach($shows as $show)
						@foreach($show->meta as $sm)
							@if($sm->meta_key === 'show_date')	
							<div class="well" style="height:120px;background-color:black;">
								<p style="text-decoration:underline;margin-bottom:0;">{{ $sm->meta_value }}</p>
							@endif
							@endforeach
								<div class="show_title_wrap" style="height:80px;overflow:hidden;text-overflow:ellipsis;">
									<strong style="color:white;">{{ $show->show_title }}</strong>
								</div>
							</div>
					@endforeach		
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-4 visible-lg" style="padding:0;padding-left:15px">
					<div class="well" style="height:250px;background-color:black;">
						<div class="page-header" style="margin-top:5px;padding:5px">
							<strong style="color:white">Shea du Jour</strong>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-sm-4 visible-lg" style="padding:0;padding-left:5px">
					<div class="well" style="height:250px;background-color:black;">
						<div class="page-header" style="margin-top:5px;padding:5px">
							<strong style="color:white">Guest List</strong>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-sm-4 visible-lg" style="padding:0;padding-left:5px">
					<div class="well" style="height:250px;background-color:black;">
						<div class="page-header" style="margin-top:5px;padding:5px">
							<strong style="color:white">Radio Show</strong>
						</div>
						<!-- <iframe width="auto" height="300" src="http://clocktower.org/drupal/play/12875/show/vincent-cacchione-soft-black-caged-animals?autoplay=false" frameborder="0"></iframe> -->
					</div>
				</div>
			</div>
		</div>	

		<div class="col-md-3 col-xs-12">
			<div class="well" style="height:640px;background-color:black;">
				<div class="page-header" style="margin-top:5px;padding:5px">
					<strong style="color:white;font-size:28px;">Archive</strong>
				</div>
			</div>
		</div>	
</div>
</div>
@endsection

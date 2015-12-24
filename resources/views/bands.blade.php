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

		<div id="a-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>A</h1>
				</div>
				<div class="row">
					<ul class="unstyled-list">
						@foreach($bands as $b)
							@if(substr($b->post_title[0], 0, 1) === 'A')
						<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
							@endif
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div id="b-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>B</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'B')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="c-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>C</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'C')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="d-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>D</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'D')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="e-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>E</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'E')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="f-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>F</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'F')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="g-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>G</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'G')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="h-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>H</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'H')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="i-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>I</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'I')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="j-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>J</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'J')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="k-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>K</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'K')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="l-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>L</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'L')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="m-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>M</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'M')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="n-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>N</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'N')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="o-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>O</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'O')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="p-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>P</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'P')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="q-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>Q</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'Q')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="r-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>R</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'R')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="s-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>S</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'S')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="t-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>T</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'T')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="u-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>U</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'U')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="v-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>V</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'V')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="w-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>W</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'W')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="x-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>X</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'X')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="y-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>Y</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'Y')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="z-bands" class="row">
			<div class="col-md-9">
				<div class="page-header">
					<h1>Z</h1>
				</div>
				<ul class="unstyled-list">
					@foreach($bands as $b)
						@if(substr($b->post_title[0], 0, 1) === 'Z')
					<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</div>
		<div id="numeric-bands" class="row" style="margin-bottom:100px;">
			<div class="col-md-9">
				<div class="page-header">
					<h1>#</h1>
				</div>
				<div class="row">
					<ul class="unstyled-list">
						@foreach($bands as $b)
							@if(is_numeric(substr($b->post_title[0], 0, 1)))
						<li class="col-md-4"><a href="bands/band-page/{{ $b->ID }}">{{ $b->post_title }}</a></li>
							@endif
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection
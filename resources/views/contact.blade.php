@extends('app')

@section('content')

<div class="container">
	<div class="col-md-9">
		<div class="row">
			<h1>Contact</h1>	
			<?= Form::open(['url' => action('ContactController@store'), 'method' => 'POST']) ?>
			    <label>Your Name: <?= Form::text('name') ?></label><br><br>
			    <label>Your Email: <?= Form::text('email') ?></label><br><br>
			    <label>Select a reason for contact: <?= Form::text('picture') ?></label><br><br>
			    <label>Subject: <?= Form::text('subject') ?></label><br><br>
			    <label>Your Message: <?= Form::textarea('message') ?></label><br><br>
			    <?= Form::submit('Send') ?>
			<?= Form::close() ?>
		</div>
	</div>

	<!-- ARCHIVES PANEL -->
	<div class="col-md-3"></div>
</div>

	
@endsection
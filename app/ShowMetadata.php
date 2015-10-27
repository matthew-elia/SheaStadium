<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowMetadata extends Model {

	protected $table = 'show_meta';

	function show() {
		return $this->belongsTo('App\Show');
	}

}

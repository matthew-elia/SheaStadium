<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BandMetadata extends Model {

	
	protected $table = 'band_meta';

	function show() {
		return $this->belongsTo('App\Band');
	}

}

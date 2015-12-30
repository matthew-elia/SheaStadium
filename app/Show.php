<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model {

	protected $table = 'shows';

	 public function show_meta()
	{
	    return $this->hasMany('App\ShowMetadata');
	}

}

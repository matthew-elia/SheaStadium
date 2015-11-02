<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon as Carbon;
use App\Show as Show;
use App\ShowMetadata as ShowMetadata;
use Illuminate\Http\Request;

class ShowsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$show_title;
		$show_data = [];
		$show_data_array = [];

		$shows = Show::orderBy('post_date', 'DESC')->simplePaginate(10);
		
		for ($i=0; $i < sizeof($shows) ; $i++) { 
			$show_data = $shows[$i]->meta;
			$show_data_array = explode(',', $show_data);
		}
		
		// DATES
		$today = Carbon::today()->formatLocalized('%A %B %d');
		$yesterday = Carbon::now()->subDay()->formatLocalized('%A %B %d');

		return view('shows')->with(compact('shows', 'show_data', 'show_data_array', 'today', 'yesterday'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

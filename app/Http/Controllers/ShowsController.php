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
		$show_details = [];
		$show_metadata = [];

		$shows = Show::orderBy('post_date', 'DESC')->take(5)->get();
		for ($i=0; $i < sizeof($shows) ; $i++) { 
			$show_data = $shows[$i]->meta->toArray();
		}
		for ($x=0; $x < sizeof($show_data) ; $x++) { 	
			$show = Show::find($show_data[$x]['show_id'])->first();

			$show_data[$x]= array($show_data[$x]['meta_key'] => $show_data[$x]['meta_value']);
			array_merge($show_data[$x]);
			
			$show_id = $show['attributes']['id'];
			$show_title = $show['attributes']['show_title'];
		}

		// for ($y=0; $y < sizeof($show_data) ; $y++) {

		// }
		
		// DATES
		$today = Carbon::today()->formatLocalized('%A %B %d');
		$yesterday = Carbon::now()->subDay()->formatLocalized('%A %B %d');

		return view('shows')->with(compact('shows', 'show_metadata', 'today', 'yesterday'));
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

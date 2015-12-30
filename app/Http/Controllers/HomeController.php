<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon as Carbon;
use App\Show as Show;
use App\ShowMetadata as ShowMetadata;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$shows = Show::orderBy('post_date', 'DESC')->limit(3)->get();
		$shows = $shows->reverse();

		// DATES
		$today = Carbon::today()->formatLocalized('%A %B %d');
		$yesterday = Carbon::now()->subDay()->formatLocalized('%A %B %d');

		return view('home')->with(compact('shows', 'today', 'yesterday'));
	}

}

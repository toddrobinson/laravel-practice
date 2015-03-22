<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about()
	{
		//$name = 'Todd <span style="color:red">Robinson</span>';
		//return view('pages.about')->with('name',$name);
		/*
		return view('pages.about')->with([
				'first' => 'Todd',
				'last' => 'Robinson'

			]);
		*/
		//$name = [];
		//$name['first'] = 'Douglas';
		//$name['last'] = 'Adams';
		//$first = 'Dunkin';
		//$last = 'Donuts';
		//return view('pages.about',compact('first','last'));

		$people = [
				'Todd Robinson','Joe Byrne' , 'Zach Clark' , 'Jackery Schader'
		];
		return view('pages.about',compact('people'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

}

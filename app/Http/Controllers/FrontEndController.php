<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
	public function index()
	{
    	return view('index')
    	->with('title', Setting::first()->site_name)
    	->with('categories', Category::take(10)->get())
    	->with('first_post', Post::orderBy('created_at','desc')->first())
    	->with('second_post', Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
    	->with('third_post', Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
    	->with('africa', Category::find(6))
    	->with('asia', Category::find(8))
    	->with('australia', Category::find(9))
    	->with('europe', Category::find(10))
    	->with('north_america', Category::find(11))
    	->with('south_america', Category::find(12))
    	->with('settings', Setting::first());
    }
}

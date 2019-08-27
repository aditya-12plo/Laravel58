<?php
namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	
	public function __construct()
    {
		
	}
	
	public function index()
    { 
		return view('welcome');
	}
	
	    public function lang($lang)
    {
        App::setLocale($lang);
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
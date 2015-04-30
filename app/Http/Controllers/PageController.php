<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NewProduct;
use App\Occupation;
use App\People;
use App\Photos;
use Illuminate\Support\Facades\Auth;
use Request;

class PageController extends Controller {

	//
	public function home()
	{
        $newProducts = NewProduct::all();
		return view('home', compact('newProducts'));
	}
	public function productDetail()
	{
		return view('product');
	}

	public function register(){
		return view('register');
	}

}

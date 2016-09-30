<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GeneralController extends Controller
{
    //home:
    //Manda a llamar la página de bienvenida
    public function home(){
    	return view('home');
    }

	//news:
    //Manda a llamar la View de news
    public function news(){
    	return view('news');
    }

    //products:
    //Manda a llamar la View de products
    public function products(){
    	return view('products');
    }

    //about:
    //Manda a llamar la View de about
    public function about(){
    	return view('about');
    }
}

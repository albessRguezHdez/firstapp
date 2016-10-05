<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GeneralController extends Controller
{
    //home:
    //Manda a llamar la página de bienvenida
    public function showHome(){
    	return view('home');
    }

	//news:
    //Manda a llamar la View de news
    public function showNews(){
        $theNews = array('elEncabezado' => 'Noticia de Software', 'elContenido' => 'Nuevas tecnologías para acercarte a las RD');
        $theOptionsNews = array("Option 1", "Option 2", "Option 3", "Option 4");
    	return view('news', array('theNews' => $theNews, 'theOptionsNews' => $theOptionsNews));
    }

    public function createNews(){

    }

    public function updateNews(){

    }

    public function deleteNews(){

    }

    //products:
    //Manda a llamar la View de products
    public function showProducts(){
    	return view('products');
    }

    //about:
    //Manda a llamar la View de about
    public function showAbout(){
    	return view('about');
    }

    //ourwork:
    //Manda a llamar la View de ourwork
    public function showOurwork(){
        return view('ourwork');
    }

    //--------------------------------------------
    //Pendiente iniciar sesión

    //search:
    //Manda a llamar la View de search
    public function showSearch(){
        return view('search');
    }

    //social:
    //Manda a llamar la View de social
    public function showSocial(){
        return view('social');
    }
}

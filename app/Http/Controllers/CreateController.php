<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CreateController extends Controller
{
    /* Create News
	* Función que permite agregar nuevas noticias 
	* Recibe: 
	* En un arreglo ($createNews) los siguientes campos:
	* -Encabezado/Título de la noticia (titleNew)
	* -Cuerpo de la noticia (bodyNew)
	* -Fuente de donde fue tomada la noticia (resourceNew)
	* Retorna:
	* Una vista con el arreglo ($createNews) para desplegar en la vista
	*/
	public function createNews{
		return view('createNews');
	}

	/* Create Products
	* Función que permite agregar productos nuevos a la lista de productos de Punto Creativo
	* Recibe: 
	* En un arreglo ($createProducts) los siguientes campos:
	* Nombre del producto (productName)
	* Descripción del producto (descriptionProduct)
	* Costo del producto ()
	* Imágen del producto (imgProduct)
	* Retorna:
	* Una vista con el arreglo ($createProducts) para desplegar en la vista
	*/
	public function createProducts{
		return view('createProducts');
	}

	/* Create About
	* 
	*/
	public function createAbout{
		return view('createAbout');
	}

	/* Create Our Work
	* 
	*/
	public function createOurWork{
		return view('createOurWork');
	}

	/* Create New User
	* 
	*/
	public function createNewUser{
		return view('createNewUser');
	}

	/* Create New Social Network
	* 
	*/
	public function createNewSocialNetwork{
		return view('createNewSocialNetwork');
	}
}

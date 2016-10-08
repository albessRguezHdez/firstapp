<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UpdateController extends Controller
{
    /* Update News
	* 
	*/
	public function updateNews{
		return view('updateNews');
	}

	/* Update Products
	* 
	*/
	public function updateProducts{
		return view('updateProducts');
	}

	/* Update About
	* 
	*/
	public function updateAbout{
		return view('updateAbout');
	}

	/* Update Our Work
	* 
	*/
	public function updateOurWork{
		return view('updateOurWork');
	}

	/* Update User
	* 
	*/
	public function updateUser{
		return view('updateUser');
	}

	/* Update Social Network
	* 
	*/
	public function updateSocialNetwork{
		return view('updateSocialNetwork');
	}
}

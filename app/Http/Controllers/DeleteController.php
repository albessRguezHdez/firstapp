<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DeleteController extends Controller
{
    /* Delete News
	* 
	*/
	public function deleteNews{
		return view('deleteNews');
	}

	/* Delete Products
	* 
	*/
	public function deleteProducts{
		return view('deleteProducts');
	}

	/* Delete About
	* 
	*/
	public function deleteAbout{
		return view('deleteAbout');
	}

	/* Delete Our Work
	* 
	*/
	public function deleteOurWork{
		return view('deleteOurWork');
	}

	/* Delete User
	* 
	*/
	public function deleteUser{
		return view('deleteUser');
	}

	/* Delete Social Network
	* 
	*/
	public function deleteSocialNetwork{
		return view('deleteSocialNetwork');
	}
}

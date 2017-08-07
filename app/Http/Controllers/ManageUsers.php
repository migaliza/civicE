<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Entrust\Role;
use App\Entrust\Permission;

class ManageUsers extends Controller
{
    //add permission
   //edit user details
	//display the user details

	/**
	*display all the users available
	*@param null
	*@return an array of users
	*/
	public function displayUser(){
		$users = User::all();
		return $users;
	}

	/**
	*display a particular user info
	*@param userId
	*@return single array of user info
	*/

	public function userInfo($userId){
		$info = User::where('_id','=',$userId)->first();
		//dd($info);
		return $info;
	}


}

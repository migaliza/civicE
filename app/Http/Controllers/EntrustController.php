<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrust\Role;
use App\Entrust\Permission;
use App\User;

class EntrustController extends Controller
{
    //
    /**
    *new role
    */
    public function newRole(){
    	return view('API/add_new_role');
    }

    public function role(Request $request){
    	$role = new Role;
    	
        $roleExists = Role::where('name','=',$request->input('name'))->value($request->input('name'));
        if(is_null($roleExists)){
            $role->name = $request->input('name');
            if(!empty($request->input('displayName'))){
                $role->displayName = $request->input('displayName');
            }
            if(!empty($request->input('description'))){
                $role->description = $request->input('description');
            }
            $role->save();
            return redirect('/');
        }

        return redirect('/');



    }

    public function newPermission(){
    	return view('/API/new_permission');

    }

    public function permission(Request $request){
    	$permission = new Permission;
    	$permission->name = $request->input('name');
    	if(!empty($request->input('displayName'))){
    		$permission->displayName = $request->input('displayName');
    	}
    	if(!empty($request->input('description'))){
    		$permission->description = $request->input('description');
    	}
    	$permission->save();
    	return redirect('/');
    }

    public function attachRole(Request $request){
        dd($request->input('uId'));
        $uId = $request->input('uId');
        $role = $request->input('role');
        $user = User::where('_id','=',$uId)->first();
        $newRole = Role::where('name','=',$role)->first();
        $user->attachRole($newRole);
    }
}

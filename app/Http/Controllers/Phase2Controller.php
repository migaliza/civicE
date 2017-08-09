<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ManageUsers;
use Entrust;

class Phase2Controller extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //dd('has an admin'. Entrust::hasRole('admin'));
        //$projectId = $request->input('pId');
        if(Entrust::hasRole('owner')){

            return view('Phase2/ProjectLeaders/index')->with('projectId',$projectId);
        }
        else if(Entrust::hasRole('admin')){

            return view('Phase2/index');
        }
    }

    /**
    *view manage user
    */
    public function manageUsers(){
        $manageUsers = new ManageUsers;
        $users = $manageUsers->displayUser();
        $roleId =$user['role_id'];
        $roleName = \App\Entrust\Role::where('_id','=',$roleId)->value('displayName');
        dd($roleName);
        return view('Phase2/Admin/manage_users')->with('users',$users);
    }


    /**
    *view a particular user
    */
    public function viewUser($userId){
        $manageUsers = new ManageUsers;
        $user = $manageUsers->userInfo($userId);
        $roleId =$user->role_id;
        $roleName = Role::where('_id','=',$roleId)->value('displayName');
        if(!is_null($user->region)){
            return view('Phase2/Admin/user_info')->with([
                'fName' => $user->fName,
                'lName' => $user->lName,
                'email' => $user->email,
                'citizenship' => $user->citizenship,
                'region' =>$user->region,
                'role' =>$roleName,
                ]);
        }
        else{
            return view('Phase2/Admin/user_info')->with([
                'fName' => $user->fName,
                'lName' => $user->lName,
                'email' => $user->email,
                'citizenship' => $user->citizenship,
                'role' =>$roleName,
                ]);

        }
        
    }

    /**
    *edit user and add user role
    */
    public function editUser($userId){
        $manageUsers = new ManageUsers;
        $user = $manageUsers->userInfo($userId);

        if(!is_null($user->region)){
            return view('Phase2/Admin/edit_user_role')->with([
                'uId' =>$user->id,
                'fName' => $user->fName,
                'lName' => $user->lName,
                'email' => $user->email,
                'citizenship' => $user->citizenship,
                'region' =>$user->region,
                ]);
        }
        else{
            return view('Phase2/Admin/edit_user_role')->with([
                'uId' => $user->id,
                'fName' => $user->fName,
                'lName' => $user->lName,
                'email' => $user->email,
                'citizenship' => $user->citizenship,
                ]);

        }


    }

    /**
    *manage fund applications
    */
    public function manageFunds(){
        return view('Phase2/Admin/FundApplications/index');
    }
}

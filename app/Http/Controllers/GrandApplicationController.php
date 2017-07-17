<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrandApplicationController extends Controller
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

     /**
    *fund application
    */
     public function grandApplication(){
     	return view('Application/dashboard');
     }

    /**
    *start a new application for projectBrief
    */
    public function projectBrief(){
    	return view('Application/project');
    }

    /**
    *display project lead blade
    */
    public function projectLead(){
    	return view('Application/projectLead');
    }

    /**
    *display project lead motivation form
    */
    public function pMotivation(){
    	return view('Application/motivation');
    }

    /**
    *display timeline and Budget
    */
    public function timelineBudget(){
    	return view('Application/timelineBudget'); 
    }

    /**
    *display recommendation
    */
    public function recommendation(){
    	return view('Application/recommendation');
    }
}

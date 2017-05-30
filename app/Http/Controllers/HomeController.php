<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Phase2/index');
    }

    public function project(){
    	return view('API/project');
    }

    public function tier(){
        return view('API/tier');
    }

    public function projectDescriptions(){
        return view('API/projectDescriptions');
    }

    public function grand(){
        return view('API/grandInfo');
    }

    public function individual(){
        return view('API/individualProject');
    }

    /**
    *population track
    *
    */
    public function population(){
        return view('API/trackPopulation');
    }

    /**
    *volunteer view 
    */
    public function volunteers(){
        return view('API/trackVolunteers');
    }
}
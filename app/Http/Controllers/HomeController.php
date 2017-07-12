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
    public function volunteer(){
        return view('API/trackVolunteers');
    }

    /**
    *fund application
    */
    public function fundApplication(){
        return view('API/fundApplication');
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
}
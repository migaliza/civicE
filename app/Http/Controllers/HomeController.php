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
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function index()
    {
        return view('Phase2/index');
    }
}

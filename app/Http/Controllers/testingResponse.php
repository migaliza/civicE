<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\projects;

class testingResponse extends Controller
{
    //
    public function __construct(Response $response){
    	$this->response = $response;
    }

    /**
    *return the project data
    *
    */
    public function books(){
    	$projects = projects::all();
    	//$project = projects::all()->get();
    	//return $projects;
    	return $this->response->withCollection($projects, new BookTransformer);
    }


}

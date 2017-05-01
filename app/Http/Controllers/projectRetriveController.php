<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use EllipseSynergie\ApiResponse\Contracts\Response;
//use app\projects;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\projects;


class projectRetriveController extends Controller
{
    //
    /**
     * constructor to create a response object
     * 
     * 
     */
    public function __construct(Response $response){
        $this->response = $response;
    }

    public function test(){
        phpinfo();
    }



    /**
     * retrieve project name and description.
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectNameDescription()
    {

        $projects = projects::all('project_namee','project_description');
        return $this->response->withCollection($projects);
        //return response()->json([$projects]);
        //return response()->json_encode($projects);
        //return $this->response->withCollection($projects,new retrievProjectController);
    }


    /**
     * retrieve all project data
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectData($projectName)
    {
        $urlEncode = urlencode($projectName);
        $projectData = projects::where('project_namee', urldecode($urlEncode))->get();
        return response()->json([$projectData]);
        //return view('ProjectInput/newProject');
    }



    /**
     * Retrieve funding information
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectFunding($projectName)
    {

        //phpinfo();
    	$funding = projects::where('project_namee','=',$projectName)->get(['Grand_info']);

        return response()->json([$funding]);
    }


    /**
     * retrieve the sentiment analysis of a project
     * 
     * @return \Illuminate\Http\Response
     */
    public function sentimentAnalysis(Request $request)
    {
        //phpinfo();
        return view('ProjectInput/newProject');
    }

    /**
     * Retrieve project information by project name
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectInformation(Request $request)
    {
        //phpinfo();
        return view('ProjectInput/newProject');
    }
}

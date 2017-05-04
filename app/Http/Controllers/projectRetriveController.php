<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use EllipseSynergie\ApiResponse\Contracts\Response;
//use app\projects;
use App\projects;


class projectRetriveController extends Controller
{
    //

    //
    /**
     * constructor to create a response object
     * 
     * 
     */
    /*public function _construct(Response $response)
    {
        $this->response = $response;
    }*/



    /**
     * retrieve project name and description.
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectNameDescription()
    {

        $projects = projects::all('project_namee','project_description');
        return response()->json([$projects]);
        //return response()->json_encode($projects);
        //return $this->response->withCollection($projects,new retrievProjectController);
    }


    /**
     * retrieve all project data
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectData()
    {
        
        $projectData = projects::all();
        return response()->json([$projectData]);
       
    }



    /**
     * Retrieve funding information
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectFunding($projectName)
    {

  
    	$funding = projects::all('Grand_info')->where('project_namee','=','$projectName');

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

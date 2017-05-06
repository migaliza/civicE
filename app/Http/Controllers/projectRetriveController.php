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
        //return $this->response->withCollection($projects);
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
    *function to display the tier 1 projects
    *
    */
    public function tiers($tier){
        
        $projectTier = projects::all()->where('tier','=','$tier');
        dd($projectTier);
        return response()->json([$projectTier]);
    }



    /**
     * Retrieve funding information
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectFunding($projectName)
    {


        //phpinfo();
    	///$funding = projects::where('project_namee','=',$projectName)->get(['Grand_info']);

  
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

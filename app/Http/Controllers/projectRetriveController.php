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
        try{
            $statusCode = 200;
            $response =[
                'projectDescriptions' =>[]
            ];
            
            $projects = projects::all('project_namee','brief_description');
            //dd($projects);
            foreach($projects as $project){
                $response['projectDescriptions'][] = [
                'projectName' => $project->project_namee,
                'description' => $project->brief_description,
                ];
                //echo $response;
            }
             //dd($projects);
        }
        catch(Exception $e){
            $statusCode = 404;
        }
        finally{
            return Response()->json($response,$statusCode);
        }   
     
    }

    /**
    *function to display the tier 1 projects
    *
    */
    public function tiers($tier){
       
        try{
            $statusCode = 200;
            if($tier == 1){
            $response = [
                'Tier1' => []
            ];

            

            $projectTier = projects::where('tier','=',$tier)->get();
            //dd($projectTier);
            foreach($projectTier as $project){
                $response['tier'][] = [
                'projectName' => $project->project_namee,
                'location' => $project->location_name,
                'briefDescription' => $project->brief_description,
                'commencementDate' => $project->commencement_date,
                'completionDate' => $project->completion_date,
                'primaryActivity' => $project->primary_activity,
                'partnerships' => $project->partnerships,
                'milestones' => $project->milestones,
                'Upcoming' => $project->Upcoming,
                'ImpactSectors' => $project->Impact_sectors,
                'GrandInfo' => $project->Grand_info,
                'TargetPopulation' => $project->Target_population,
                'LessonsLearnt' => $project->Lessons_learnt,
                'TargetPopulationTrack'=> $project->Population_Track,
                'volunteer'=> $project->volunteer_track,

                ];
            }
        }

        elseif($tier == 2){
            $response = [
                'Tier2' => []
            ];
            $projectTier = projects::where('tier','=',$tier)->get();
            foreach($projectTier as $project){
                $response['tier'][] = [
                'projectName' => $project->project_namee,
                'location' => $project->location_name,
                'briefDescription' => $project->brief_description,
                'GrandInfo' => $project->Grand_info,
                'GrandRational' => $project->funding_rational,

                ];
            }

        }

        }catch( Exception $e){
             $statusCode = 404;
        }
        finally{
            return response()->json($response, $statusCode);
        }
        

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
       try{
        $response =[
            'Funding' => []
        ];
        $statusCode = 200;
        $funding = projects::where('project_namee','=',$projectName)->get(['Grand_info']);

        foreach($funding as $projectFund){
            $response['Funding'][]=[
            'Name' => $projectFund->Grand_info,
            
            ];
            
        }
       }
       catch(Exception $e){
         $statusCode = 404;
       }
       finally{
        return response()->json($response,$statusCode);
       }
  
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
    public function projectInformation($projectName)
    {
       
        try{
            $statusCode = 200;
            
            $response = [
                $projectName => []
            ];

            $tier = projects::where('project_namee', '=', $projectName)->get(['tier'])->toArray();
          $pTier = $tier[0]['tier'];
            
            if($pTier == "1"){
                $iProject = projects::where('project_namee','=',$projectName)->get();
                foreach($iProject as $individualProject){
                $response[$projectName][] = [
                'projectName' => $individualProject->project_namee,
                'location' => $individualProject->location_name,
                'briefDescription' => $individualProject->brief_description,
                'commencementDate' => $individualProject->commencement_date,
                'completionDate' => $individualProject->completion_date,
                'primaryActivity' => $individualProject->primary_activity,
                'partnerships' => $individualProject->partnerships,
                'milestones' => $individualProject->milestones,
                'Upcoming' => $individualProject->Upcoming,
                'ImpactSectors' => $individualProject->Impact_sectors,
                'GrandInfo' => $individualProject->Grand_info,
                'TargetPopulation' => $individualProject->Target_population,
                'LessonsLearnt' => $individualProject->Lessons_learnt,
                'TargetPopulationTrack'=> $individualProject->Population_Track,
                'volunteer'=> $individualProject->volunteer_track,
                ];
            }

        }   
        elseif($pTier == '2'){
           $iProject = projects::where('project_namee','=',$projectName)->get();

            foreach($iProject as $individualProject){
                $response[$projectName][] = [
                'projectName' => $individualProject->project_namee,
                'location' => $individualProject->location_name,
                'briefDescription' => $individualProject->brief_description,
                'GrandInfo' => $individualProject->Grand_info,
                'GrandRational' => $individualProject->funding_rational,
                ];
            }

        }

        }catch( Exception $e){
             $statusCode = 404;
        }
        finally{
            return response()->json($response, $statusCode);
        }   
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use EllipseSynergie\ApiResponse\Contracts\Response;
//use app\projects;
//use EllipseSynergie\ApiResponse\Contracts\Response;
use Response;
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
        $statusCode = 404;
             $response = [
                'error' => ['no response']

             ];

        try{
            $statusCode = 200;
            $response = [
                'projectDescriptions' =>[]
            ];
            
            $projects = projects::all('project_namee','brief_description');
         
            foreach($projects as $project){
                $response['projectDescriptions'][] = [
                'projectName' => $project->project_namee,
                'description' => $project->brief_description,
                ];
            }
             
            return Response::json($response,$statusCode);
        }
        catch(Exception $e){
            $statusCode = 404;
        }
        finally{

            return Response::json($response,$statusCode);
        }   
     
    }

    /**
    *function to display the tier 1 projects
    *
    */
    public function tiers($tier){
       $statusCode = 404;
             $response = [
                'error' => ['no response']

             ];
        try{
            $statusCode = 200;
            if($tier == 1){
            $response = [
                'Tier1' => []
            ];

            $projectTier = projects::where('tier','=',$tier)->get();
            foreach($projectTier as $project){
                $response['Tier1'][] = [
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
                $response['Tier2'][] = [
                'projectName' => $project->project_namee,
                'location' => $project->location_name,
                'briefDescription' => $project->brief_description,
                'GrandInfo' => $project->Grand_info,
                'GrandRational' => $project->Funding_rational,
                ];
            }

        }
        
        }catch( Exception $e){
          //
        }
        finally{
            //dd($response);
            return Response::json($response,$statusCode);
        }

    }


    /**
     * retrieve all project data
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectData()
    {
        $statusCode = 404;
        $response = ['error' => ['no response']];
        try{
            $statusCode = 200;
            $response = [
              'Projects' => []
            ];

            $projectData = projects::all();
            dd($projectData);
            foreach($projectData as $projectD){
                $response['Projects'][] = [
                'projectName' => $projectD->project_namee,
                'town' => $projectD->location_town,
                'region' => $projectD->Region,
                'country' => $projectD->Country,
                'longitude' => $projectD->location_longitude,
                'latitude' => $projectD->location_latitude,
                'briefDescription' => $projectD->brief_description,
                'commencementDate' => $projectD->commencement_date,
                'completionDate' => $projectD->completion_date,
                'primaryActivity' => $projectD->primary_activity,
                'partnerships' => $projectD->partnerships,
                'milestones' => $projectD->milestones,
                'Upcoming' => $projectD->Upcoming,
                'ImpactSectors' => $projectD->Impact_sectors,
                'GrandInfo' => $projectD->Grand_info,
                'TargetPopulation' => $projectD->Target_population,
                'LessonsLearnt' => $projectD->Lessons_learnt,
                'TargetPopulationTrack' => $projectD->Population_Track,
                'volunteer' => $projectD->volunteer_track,
                ];
            }
            return Response::json($response,$statusCode);
        }
        catch(Exception $e){

        }
            return Response::json($response,$statusCode);
        
               
    }

    /**
     * Retrieve funding information
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectFunding($projectName)
    {
        $statusCode = 404;
             $response = [
                'error' => ['no response']

             ];

       try{
        $response =[
            'Funding' => []
        ];
        $statusCode = 200;
        $funding = projects::where('project_namee','=',$projectName)->get(['Grand_info']);

        foreach($funding as $projectFund){
            $response['Funding'][]=[
            'FundingInfo' => $projectFund->Grand_info,
            ];
            
        }
         return response()::json($response,$statusCode);
       }
       catch(Exception $e){
         //
       }
       finally{
        return response()::json($response,$statusCode);
       }
  
    }


    /**
     * retrieve the sentiment analysis of a project
     * 
     * @return \Illuminate\Http\Response
     */
    public function sentimentAnalysis(Request $request)
    {
     
        return view('ProjectInput/newProject');
    }

    /**
     * Retrieve project information by project name
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectInformation($projectName)
    {
        $statusCode = 404;
        $response = [
                'error' => ['no response']
             ];

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
        // return response()::json($response,$statusCode);

        }catch( Exception $e){
             //$statusCode = 404;
        }
        finally{
            return Response::json($response, $statusCode);
        }   
    }


    /**
    *function to fetch the target population track
    *
    */
    public function trackPopulation($projectName){
       /* $response = [
            'error' => ['no response']
        ];
        $statusCode = 404;
        try{
            $response = [
                'Population' => []
            ];

            $statusCode = 200;

            $population = projects::where('project_namee', '=', $projectName)->get(['Population_Track'])->toArray();
               // $baselinePopulation = $population[0]['Population_Track']['target_baseline'];
               // dd($population);
            foreach($population as $projectPop => $value){
                if(is_array($value) || is_object($value)){

                    foreach($value as $vtest => $data){
                        //echo $vtest." ".$data;
                        if(is_array($data) || is_object($data)){
                            foreach($data as $vData => $innerData){
                                echo $vData." "$innerData;
                            }
                            else{
                                echo $vtest." ".$data;
                            }
                        }
                    }
                }
                else{
                    echo $projectPop." ".$value;
                }
            }
                
          
        }
        catch(Exception $e){
            echo $e;
        }finally{
            //
        }*/
    }

    /**
    *function to fetch the volunteer track
    *
    */
    public function trackVolunteer(){
        
    }


}

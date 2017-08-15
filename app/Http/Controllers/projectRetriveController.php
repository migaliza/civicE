<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use Response;
use App\projects;
use App\ApiCode;
//use Request;


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
    public function projectNameDescription(Request $request)
    {
        $sort = $request->input('sortBy');
        if($sort == "keyWord"){
            $keyWord = $request->input('keyWord');
            $limit = (int)$request->input('limit');
            $projections = ['pName','description','impactSector'];
            $projects =  projects::where('pName', 'regexp','/.*'.$keyWord.'*/')->paginate($limit,$projections);
            if(!is_null($projects)){
                foreach($projects as $project){
                    $resp[] = [
                    'id' => $project->_id,
                    'projectName' => $project->pName,
                    'description' => $project->description,
                    'ImpactSectors' =>$project->impactSectors,
                    ];
                }
                $response = $resp;
                return ResponseBuilder::success($response);
            }

        }
        elseif($sort == "impactSector"){
            $impact =  $request->input('impactSector');
            $limit = (int)$request->input('limit');
            $projections = ['pName','description','impactSector'];
            $projects =  projects::where('impactSector','regexp','/.*'.$impact.'*/')->paginate($limit,$projections);
            if(!is_null($projects)){
                foreach($projects as $project){
                    $resp[] = [
                    'id' => $project->_id,
                    'projectName' => $project->pName,
                    'description' => $project->description,
                    ];
                }
                $response = $resp;
                return ResponseBuilder::success($response);
            }

        }
        elseif($sort == "commencementDate"){
            $date = $request->input('commencementDate');
            $limit = (int)$request->input('limit');
            $projections = ['pName','description','impactSector'];
            $projects =  projects::where('commencement_date','regexp', '/.*'.$date.'*/')->paginate($limit,$projections);
            if(!is_null($projects)){
                foreach($projects as $project){
                    $resp[] = [
                    'id' => $project->_id,
                    'projectName' => $project->pName,
                    'description' => $project->description,
                    'impactSector' => $project->impactSector,
                    ];
                }
                $response = $resp;
                return ResponseBuilder::success($response);
            }

        }
        else{
            $limit = (int)$request->input('limit');
            $projections = ['pName','description','impactSector'];
            $projects =  projects::paginate($limit,$projections);
            if(!is_null($projects)){

                foreach($projects as $project){
                    $resp[] = [
                    'id' => $project->_id,
                    'projectName' => $project->pName,
                    'description' => $project->description,
                    'impactSector' => $project->impactSector,
                    ];
                }
                $response = $resp;
                return ResponseBuilder::success($response);
            }
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
                foreach($projectTier as $project){
                    $response[] = [
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
                return ResponseBuilder::success($response);
            }
            elseif($tier == 2){
                $response = [
                'Tier2' => []
                ];
                $projectTier = projects::where('tier','=',$tier)->get();
                foreach($projectTier as $project){
                    $response[] = [
                    'projectName' => $project->project_namee,
                    'location' => $project->location_name,
                    'briefDescription' => $project->brief_description,
                    'GrandInfo' => $project->Grand_info,
                    'GrandRational' => $project->Funding_rational,
                    ];
                }
                return ResponseBuilder::success($response);
            }
        }catch( Exception $e){
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

        foreach($projectData as $project){
            $resp[]=[
            'id' => $project->_id,
            'projectName' => $project->pName,
            'Town' => $project->region,
            'latitude' => $project->longitude,
            'description' => $project->description,
            'commencementDate' => $project->commencementDate,
            'completionDate' => $project->completionDate,
            'impactPopulation' => $project->impactPopulation,
            'impactSector' => $project->impactSector,
            'primaryActivity' => $project->primaryActivity,
            'upcoming' => $project->upcoming,
            'pStatistics' => $project->pStatistics,
            ];
        }
        $response = $resp;
        if(!is_null($response)){
            return ResponseBuilder::success($response);
        }
        else{
            return ResponseBuilder::error(ApiCode::SOMETHING_WENT_WRONG,$data);
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
     * Retrieve project information by project Id number
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectInformation(Request $request)
    {
        $pId = $request->input('pId');
        dd($pId);
        if(!empty($pId)){
            $project = projects::where('_id','=',$pId)->get();
            dd($project);
            if(!is_null($project)){
                dd($project);
                foreach ($project as $individualProject){
                    $resp[] = [
                    'projectId' => $individualProject->_id,
                    'projectName' => $individualProject->pName,
                    'town' => $individualProject->town,
                    'region' => $individualProject->region,
                    'latitude' => $individualProject->latitude,
                    'longitude' => $individualProject->longitude,
                    'description' => $individualProject->description,
                    'commencementDate' => $individualProject->commencementDate,
                    'completionDate' => $individualProject->completionDate,
                    'impactPopulation' => $individualProject->impactPopulation,
                    'impactSector' => $individualProject->impactSector,
                    'primaryActivity' => $individualProject->primaryActivity,
                    'upcoming' => $individualProject->upcoming,
                    'fundingInfo' => $individualProject->fundingInfo,
                    'partnerships' => $individualProject->partnerships,
                    'pStatistics' => $individualProject->pStatistics,
                    ];
                }
                $response = $resp;
                return ResponseBuilder::success($resp);
            }
            else{
                return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
            }
        }
        else{
            return ResponseBuilder::error(ApiCode::WRONG_PROJECT_ID);
        }

    }


    /**
    *function to fetch the target population track
    *
    */
    public function trackPopulation(Request $request){
        $projectId = $request->get('id');
        if(!is_null($projectId)){
           $population = projects::where('_id','=',$projectId)->get(['Population_Track']);
           if(!is_null($population)){
            return ResponseBuilder::success($population);
        }
    }
    else{
        $data = ["error" => "ensure you input id correctly"];
        return ResponseBuilder::error(ApiCode::SOMETHING_WENT_WRONG,$data);
    }

}

    /**
    *function to fetch the volunteer track
    *
    */
    public function trackVolunteer(Request $request){
        //response
        $projectId =$request->get('id');
        if(!is_null($projectId)){
            $volunteers = projects::where('_id','=',$projectId)->get(['Volunteer_Track']);
            if(!is_null($volunteers)){
                return ResponseBuilder::success($volunteers);
            }
        }
        else{
            $data = ["error" => "ensure you input id correctly" ];
            return ResponseBuilder::error(ApiCode::SOMETHING_WENT_WRONG,$data);
        }

    }


    /**
     * Retrieve project information by project name
     * 
     * @return \Illuminate\Http\Response
     */
    public function projectById(Request $request)
    {
        $projectId = $request->get('id');
       //dd($projectId);
        if(!is_null($projectId)){

            $response = projects::where('_id','=',$projectId)->where('tier','=',"1")->get();
            $count = count($response);
            if($count>0){
               // dd('true');
                return ResponseBuilder::success($response);
            }
            else{
                $data = ["error" => "pass a valid id"];
                return ResponseBuilder::error(ApiCode::SOMETHING_WENT_WRONG, $data);
            }

        }
        else{
            $data = ["error" => "pass a valid id"];
            return ResponseBuilder::error(ApiCode::SOMETHING_WENT_WRONG, $data);
        }
    }


    /**
    *impactSectors
    */
    public function impactSector(Request $request){
        $pId = $request->input('pId');
        if(!empty($pId)){
            $project = projects::where('_id','=',$pId)->value('impactSector');
            if(!is_null($project)){
                $impactSect[] = explode(',', $project);

                foreach ($impactSect as $impactSector) {
                    $resp[] = [
                    'impactSector' => $impactSector
                    ];
                }
                $response = $resp;
                return ResponseBuilder::success($response);
            }
            else{
                return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
            }
        }
        else{
            return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
        }
    }


    /**
    *impactSectors
    */
    public function impactPopulation(Request $request){
        $pId = $request->input('pId');
        if(!empty($pId)){
            $project = projects::where('_id','=',$pId)->value('impactPopulation');
            if(!is_null($project)){
                $impactPop[] = explode(',', $project);
                foreach ($impactPop as $impactPopulation) {
                    $resp[] = [
                    'impactPopulation' => $impactPopulation
                    ];
                }
                $response = $resp;
                return ResponseBuilder::success($response);
            }
            else{
                return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
            }
        }
        else{
            return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
        }
    }

}

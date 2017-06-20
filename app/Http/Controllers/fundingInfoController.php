<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use App\fundingInfo;
use App\ApiCode;
use App\projects;

class fundingInfoController extends Controller
{
    /**
    *insert a new funding info
    */
    public function insertFundingInfo(Request $fundingInfo){
    	$fundingInfo = new fundingInfo;
    	$fundingInfo->fPartner ='Ford Foundation' ;
    	$fundingInfo->fAmount = 328938;
    	$fundingInfo->fObjective ='to provide the youths with affordable spaces to work' ;
    	$fundingInfo->fDescription = 'this will be used sparingly to provide enough space for the people around' ;

    	$project = projects::where('_id','=','58dd18779a89200bd5147202')->first();
    	$project->fundingInfo()->save($fundingInfo);

    }

    /**
    *obain the project to edit
    */
    public function retrieveValuesToEdit(Request $projectId){
    	//pId = $projectId->input('id');
    	$project = projects::where('_id','=','58dd18779a89200bd5147202')->first();
    	$fundingInfo = $project->fundingInfo;
    	if(!is_null($fundingInfo)){
    		return ResponseBuilder::success($fundingInfo);
    	}
    	else{
    		$data =["error" => "ensure you entered the right id"];
            return ResponseBuilder::error(ApiCode::SOMETHING_WENT_WRONG,$data);
    	}
    }

    /**
    *edit a selected funding info
    */
    public function editFundingInfo(Request $fInfo){
    	$projectId = $fInfo->input('pId');
    	$fundingId = $fInfo->input('fId');
    	$amount = $fInfo->input('amount');
    	$partner = $fInfo->input('partner');
    	$objective = $fInfo->input('objective');
    	$description = $fInfo->input('description');
    	
    	$project = projects::where('_id','=','58dd18779a89200bd5147202')->first();
    	$fundingInfo = $project->fundingInfo->where('_id','=','59492a9e9a8920070c6336e4')->first();
    	//dd($fundingInfo);
    	$fundingInfo->fPartner = "changed to something";
    	$fundingInfo->fAmount = 10000;
    	$fundingInfo->fObjective = 'changed funding objective';
    	$fundingInfo->fDescription = "changed the funding infor description";
    	$fundingInfo->save();
   
    }
}

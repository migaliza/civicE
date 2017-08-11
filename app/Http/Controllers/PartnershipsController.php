<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use App\Partnerships;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use App\ApiCode;


class PartnershipsController extends Controller
{

    public function getPartnershipView($projectId){
        return view('ProjectInput/partnership')->with('projectId',$projectId);
    }
    //
    /**
    *add new partnership and their descriptions
    *parameter: project id, partnership, description
    */
    public function addNewPartnership(Request $request){
    	$pId = $request->input('pId');

    	$partnership = $request->input('partnership');
    	$description = $request->input('description');
    	$pPartnerships = new Partnerships;
    	if(!empty($pId)){
    		$project = projects::where('_id','=',$pId)->first();
            if(!is_null($project)){
                if(!empty($partnership) && !empty($description)){
                    $pPartnerships->partnership = $partnership;
                    $pPartnerships->description = $description;
                    $project->partnerships()->save($pPartnerships);
                    $response[] = ['message' => 'Succesfully added a partnership'];
                    return redirect('/dashboard');
                }
                else{
                    return ResponseBuilder::error(ApiCode::All_FIELDS_NOT_ENTERED);
                }
            }
            else{
                return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
            }

        }
        else{
            return ResponseBuilder::error(ApiCode::WRONG_PROJECT_ID);
        }	
    }
}

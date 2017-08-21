<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use App\fundingInfo;
use App\ApiCode;
use App\projects;
use App\Expenditure;

class fundingInfoController extends Controller
{


    /**
    *display the grant view
    *
    */
    public function newGrant($projectId){
        return view('ProjectInput/grant')->with('projectId', $projectId);
    }


    /**
    *insert a new funding info
    */
    public function insertFundingInfo(Request $request){
        $fundingInfo = new fundingInfo;
        $pId = $request->input('pId');

        if(!empty($pId)){
            $project = projects::where('_id','=',$pId)->first();
            if(!is_null($project)){
                if(!empty($request->input('fPartner')) && !empty($request->input('fAmount')) && !empty($request->input('fObjective')) && !empty($request->input('fDescription'))){
                    $fundingInfo->fPartner = $request->input('fPartner');
                    $fundingInfo->fAmount = (float)$request->input('fAmount');
                    $fundingInfo->fObjective = $request->input('fObjective');
                    $fundingInfo->fDescription = $request->input('fDescription');

                    $project->fundingInfo()->save($fundingInfo);
                    $response[] = ['message' => 'Succesfully added a new funding info to project'];
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

    /**
    *retrieve funding values
    */
    public function retrieveFunding(Request $request){
        $pId = $request->input('pId');

        if(!empty($pId)){
            $fundingInfo = projects::where('_id','=',$pId)->value('fundingInfo');
            $size = sizeof($fundingInfo);
            if($size != 0){
                //dd($fundingInfo);
                foreach ($fundingInfo as $funding) {
                    $resp[] = [
                    'fPartner' => $funding->fPartner,
                    'fAmount' => $funding->fAmount,
                    'fObjective' => $funding->fObjective,
                    'fDescription' => $funding->fDescription,
                    ];
                }
               // dd($resp);
                $response = $resp;
                return ResponseBuilder::success($response);   
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
    *obain the project to edit
    */
    public function retrieveValuesToEdit(Request $request){
        $pId = $request->input('pId');
        $fId = $request->input('fId');

        if(!empty($pId) || !empty($fId)){
            $project = projects::where('_id','=',$pId)->first();
            if(!is_null($project)){
                $fundingInfo = $project->fundingInfo()->where('_id','=',$fId)->first();
                if(!is_null($fundingInfo)){
                    return ResponseBuilder::success($fundingInfo);
                }
                else{
                    return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
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

    /**
    *edit a selected funding info
    */
    public function editFundingInfo(Request $fInfo){
        $pId = $fInfo->input('pId');
        $fId = $fInfo->input('fId');

        if(!empty($pId) && !empty($fID)){
            $project = projects::where('_id','=',$pId)->first();
            $fundingInfo = $project->fundingInfo->where('_id','=',$fId)->first();

            if(!is_null($project) && !is_null($fundingInfo)){
                if(!empty($fInfo->input('partner')) && !empty($fInfo->input('amount')) && !empty($fInfo->input('objective')) && !empty($fInfo->input('description'))){
                    $fundingInfo->fPartner = $fInfo->input('partner');;
                    $fundingInfo->fAmount = (float)$fInfo->input('amount');
                    $fundingInfo->fObjective =  $fInfo->input('objective');
                    $fundingInfo->fDescription = $fInfo->input('description');
                    $fundingInfo->save();
                    $response[] = ['message' => 'Succesfully added a edited funding info of the project'];
                    return ResponseBuilder::success($response);
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

    /**
    *insert a new funding expenditure to the funding info
    *parameters: funding id, project id, purpose, amount, description
    */
    public function insertFundingExpenditure(Request $request){
        $fId = $request->input('fId');
        $pId = $request->input('pId');

        if(!empty($fId) && !empty($pId)){
            $project = projects::where('_id','=',$pId)->first();
            $fundingInfo = $project->fundingInfo->where('id','=',$fId)->first();
            if(!is_null($project) && !is_null($fundingInfo)){
                $expenditure = new Expenditure;
                if(!empty($request->input('purpose')) && !empty($request->input('amount')) && !empty($request->input('description'))){
                    $expenditure->purpose = $request->input('purpose');
                    $expenditure->amount = (float)$request->input('amount');
                    $expenditure->description = $request->input('description');
                    if(!empty($request->input('other'))){
                        $expenditure->description = $request->input('other');
                    }

                    $fundingInfo->expenditure()->save($expenditure);
                    $response[] = ['message' => 'Succesfully added a new funding expenditure to the project'];
                    return ResponseBuilder::success($response);

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

    /**
    *retriev expenditure to edit
    *parameter: project id, funding info id, expenditire id,
    */
    public function expenditureValues(Request $request){
        $fundingInfoId = $request->input('fId');
        $projectId = $request->input('pId');
        $expenditureId = $request->input('eId');
        $project = projects::where('_id','=',$projectId)->first(); 
        $fundingInfo = $project->fundingInfo->where('id','=',$fundingInfoId)->first();
        $expenditure = $fundingInfo->expenditure->where('id','=', $expenditureId)->first();

        if(!is_null($expenditure)){
            return ResponseBuilder::success($expenditure);
        }
        else{
            $data =["error" => "ensure you entered the right id"];
            return ResponseBuilder::error(ApiCode::SOMETHING_WENT_WRONG,$data);
        }

    }

    /**
    *edit an existing funding expenditure to the funding info
    *parameters: funding id, project id, purpose, amount, description
    */
    public function editFundingExpenditure(Request $request){
        $fId = $request->input('fId');
        $pId = $request->input('pId');
        $eId = $request->input('eId');
        if(!empty($pId)){
            $project = projects::where('_id','=',$pId)->first();
            if(!is_null($project)){

                if(!empty($fId)){
                   $fundingInfo = $project->fundingInfo->where('id','=',$fId)->first();
                   if(!is_null($fundingInfo)){
                    if(!empty($eId)){
                        $expenditure = $fundingInfo->expenditure->where('id','=', $eId)->first();
                            //dd($expenditure);
                        if(!is_null($expenditure)){
                            if(!empty($request->input('purpose')) && !empty($request->input('amount')) && !empty($request->input('description'))){

                                $expenditure->purpose = $request->input('purpose');
                                $expenditure->amount = (float)$request->input('amount');
                                $expenditure->description = $request->input('description');
                                if(!empty($request->input('other'))){
                                    $expenditure->description = $request->input('other');
                                }
                                $expenditure->save();
                                $response[] = ['message' => 'Succesfully editted funding expenditure to the project'];
                                return ResponseBuilder::success($response);
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
                        return ResponseBuilder::error(ApiCode::NO_EXPENDITURE_ID);
                    }   
                }
                else{
                    return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
                }
            }
            else{
                return ResponseBuilder::error(ApiCode::NO_FUNDING_id);
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

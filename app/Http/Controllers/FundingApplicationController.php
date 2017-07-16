<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funding_Application;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use App\ApiCode;
use App\FAProjectLeaders;
use App\PrimaryProjectLead;
use App\budgetTimeline;
use Input;
use Storage;

class FundingApplicationController extends Controller
{
    //
    /**
    *add a new funding aapplication
    *parameters: project Name, synopsis, expense file 
    */
    public function newFundingApplication(Request $request){
        $fApplication = new Funding_Application;
        if(!empty($request->input('pTitle')) && !empty($request->input('synopsis')) ){
            $fApplication->pTitle = $request->input('pTitle');
            $fApplication->synopsis = $request->input('synopsis');

            $fApplication->save();
            $response[] = ['message' => 'Created a new funding grand'];
            return ResponseBuilder::success($response);
        }
        else{
            return ResponseBuilder::error(ApiCode::All_FIELDS_NOT_ENTERED);
        }


    }
    /**
    *add primary project lead information
    *@parameter: funding Id
    */
    public function projectLead(Request $request){
        $grantId = $request->input('grantId');
        if(!empty($grantId)){
            $fundingAp = Funding_Application::where('_id','=',$grantId)->first();
            if(!is_null($fundingAp)){
                $primaryLead = new PrimaryProjectLead;
                $primaryLead->role = $request->input('role');
                $primaryLead->status = $request->input('status');
                $primaryLead->fName = $request->input('fName');
                $primaryLead->lName = $request->input('lName');
                $primaryLead->gender = $request->input('gender');
                $primaryLead->citizenship = $request->input('citizenship');
                if($request->input('status')=='student'){
                    $primaryLead->graduation = $request->input('graduation');
                    $primaryLead->major = $request->input('major');
                    $primaryLead->phoneNumber = $request->input('phoneNumber');
                    $primaryLead->residentailAddress = $request->input('rAddrss');
                    $primaryLead->ashesiEmail = $request->input('ashesiEmail');
                    $primaryLead->alternativeEmail = $request->input('alternativeEmail');
                    $primaryLead->GPA = $request->input('GPA');
                    $primaryLead->housing = $request->input('housing');

                }
                elseif($request->input('status') == 'faculty'){
                    $primaryLead->department = $request->input('department');
                    $primaryLead->jobTitle = $request->input('jobTitle');
                }
                
                $fundingAp->primaryLead()->save($primaryLead);
                $response [] = ['Successfully added Primary Lead'];
                return ResponseBuilder::success($response);

            }
            else{
                return ResponseBuilder::error(ApiCode::WRONG_GRAND_ID_USED);
            }
        }
        else{
            return ResponseBuilder::error(ApiCode::GRAND_ID_NOT_ENTERED);
        }
    }


    /**
    *add funding proposal to a funding application
    *parameters: funding application Id, $population; $community; $youthChildren;  //yes or no,  $assets; $approach; $measureSuccess;$impediments; $continue; //yes or no answer; $volunteers; $shareSuccess;
    */
    public function fundingProposal(Request $request){
        $grantId = $request->input('grantId');
        if(!empty($grantId)){
            $fundingAp = Funding_Application::where('_id','=',$grantId)->first();
            if(!is_null($fundingAp)){
                if(!empty($request->input('population')) && !empty($request->input('community')) && !empty($request->input('YC')) && !empty($request->input('assets')) && !empty($request->input('successMeasure')) && !empty($request->input('impediments')) && !empty($request->input('continue')) &&!empty($request->input('volunteers')) && !empty($request->input('shareSuccess')) && !empty($request->input('approach'))){

                    $projectProposal = new Projectproposal;
                    $projectProposal->population = $request->input('population');
                    $projectProposal->community = $request->input('communityNeed');
                    $projectProposal->youthChildren = $request->input('YC'); 
                    $projectProposal->asset = $request->input('assets');
                    $projectProposal->apprach = $request->input('approach');
                    $projectProposal->measureSuccess = $request->input('successMeasure');
                    $projectProposal->impediments = $request->input('impediments');
                    $projectProposal->continue = $request->input('continue');
                    $projectProposal->volunteers = $request->input('volunteersRoles');
                    $projectProposal->shareSuccess = $request->input('shareSuccess');


                    $fundingAp->projectProposal()->save($projectProposal);
                    $response[] = ['message' => 'Succesfully added project proposal to grand application'];
                    return ResponseBuilder::success($response);
                }
                else{
                    return ResponseBuilder::error(ApiCode::All_FIELDS_NOT_ENTERED);
                }
            }
            else{
                return ResponseBuilder::error(ApiCode::WRONG_GRAND_ID_USED);
            }
        }
        else{
            return ResponseBuilder::error(ApiCode::GRAND_ID_NOT_ENTERED);
        }

    }

    /**
    *add projectLeads motivation to funding application
    */
    public function projectLeadMotivation(Request $request){
        $grantId = $request->input('grantId');
        //$motivationId = $request->input('motivationId');
        if(!empty($grantId) && !empty($motivationId)){
            $fundingAp = Funding_Application::where('_id','=',$grantId)->first();
            if(!is_null($fundingAp)){
                $personalMotivation = new PMProjectLead;
                $personalMotivation->name = $request->input('name');
                $personalMotivation->motivation = $request->input('motivation');
                if($request->hasFile('cv')){
                    Storage::disk('local')->put('cv/'. $request->file('cv')->getClientOriginalName(). $request->file('cv')->getClientoriginalExtension() ,$request->file('cv'));
                    
                }
                $personalMotivation->cv = $request->file('cv');

                $fundingAp->motivation()->save($personalMotivation);
                $response[] = ['message' => 'Succesfully added motivation to project'];
                return ResponseBuilder::success($response);
                
            }
            else{
                return ResponseBuilder::error(ApiCode::WRONG_GRAND_ID_USED);
            }
        }
        else{
            return ResponseBuilder::error(ApiCode::GRAND_ID_NOT_ENTERED);
        }

    }



    /**
    *download the budget and timeline file
    */
    public function downloadBudgetTimeline(){
        $file = public_path()."/download/project Timeline and Budget Template.xlsx";
        return response()->download($file);
    }

    /**
    *Upload the project timeline and budget
    */
    public function uploadProjectTimeLineBudget(Request $request){
        $grantId = $request->input('grantId');
        if(!empty($grantId)){
            $fundingAp = Funding_Application::where('_id','=',$grantId)->first();
            if(!is_null($fundingAp)){

                if($request->hasFile('timelineBudget') && $request->file('timelineBudget')->isValid()){

                    Storage::disk('local')->put('timelineBudget/tier1/'. $request->file('timelineBudget')->getClientOriginalName(). $request->file('timelineBudget')->getClientoriginalExtension() ,$request->file('timelineBudget'));
                    //dd($name);

                }
                else{
                    echo "wrong file";
                }
            }
            else{
                return ResponseBuilder::error(ApiCode::WRONG_GRAND_ID_USED);
            }
        }
        else{
            return ResponseBuilder::error(ApiCode::GRAND_ID_NOT_ENTERED);
        }
    }


    /**
    *download timeline and budget
    */
    public function downloadTimelineAndBudget(){
        

    }

}

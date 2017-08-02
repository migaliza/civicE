<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Milestones;
use App\milestones_comments;
use App\projects;
use Carbon\Carbon;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use App\ApiCode;

class MilestonesController extends Controller
{


    /**
    *display the view to add a new milstone
    *@param projectId
    *@return milstone view
    */
    public function newMilestone($projectId){

        return view('ProjectInput/milestone')->with('projectId',$projectId);
    }



    /**
    *method to add a new milestone to a project
    *@param projectId, milstone description
    *@return 
    */
    public function insertMilestone(Request $request){
        $pId = $request->input('pId');

        if(!empty($pId)){
            $projectId = projects::where('_id','=',$pId)->value('_id');


            if(!is_null($projectId)){
                $newMilestone = new Milestones;
                $newMilestone->pId = $projectId;


                if(!empty($request->input('description'))){
                    $newMilestone->mDescription = $request->input('description');
                    $newMilestone->save();
                    $response[] = ['message' => 'Succesfully added a new milestone'];
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
    *method to push a comments to a milestone
    **/
    public function insertComment(Request $request){
        $mId = $request->input('mId');

        if(!empty($mId)){
            $milestone = Milestones::where('_id','=',$mId)->first();
            if(!is_null($milestone)){
                $comment = new milestones_comments;

                if(!empty($request->input('uId')) && !empty($request->input('comment'))){
                    $comment->userId = $request->input('uId');
                    $comment->mComment = $request->input('comment');
                    $milestone->mComments()->save($comment);

                    $response[] = ['message' => 'Succesfully added a comment to milestone'];
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
}

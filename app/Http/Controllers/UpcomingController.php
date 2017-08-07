<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use App\Upcoming;
use App\ UpcomingComments;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use App\ApiCode;

class UpcomingController extends Controller
{

    /**
    *display the upcoming view
    *@param projectId
    */
    public function newUpcoming($projectId){
        return view('ProjectInput/upcoming')->with('projectId',$projectId);
        
    }
    //
    /**
    *insert new Upcoming
    *@param: project id, Upcoming
    */
    public function addNewUpcoming(Request $request){
    	$pId = $request->input('pId');

    	if(!empty($pId)){
    		$project = projects::where('_id','=',$pId)->first();
    		if(!is_null($project)){
    			$upcoming = new Upcoming;
    			if(!empty($request->input('upcoming'))){
    				$upcoming->upcoming = $request->input('upcoming');
    				$project->upcoming()->save($upcoming);

    				$response[] = ['message' => 'Succesfully added Upcoming to project'];
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
    *add comment to upcoming
    *parameters: project id, upcoming id, user id, comment
    */

    public function addCommentUpcoming(Request $request){
    	$pId = $request->input('pId');
    	$upId = $request->input('upId');

    	if(!empty($pId) && !empty($upId)){
    		$project = projects::where('_id','=',$pId)->first();
    		if(!is_null($project)){
    			$upcoming = $project->upcoming()->where('_id','=',$upId)->first();
    			if(!is_null($upcoming)){
    				if(!empty($request->input('userId')) && !empty($request->input('comment'))){
    					$upcomingComments = new UpcomingComments;
    					$upcomingComments->userId = $request->input('userId');
    					$upcomingComments->uComment = $request->input('comment');

    					$upcoming->upComments()->save($upcomingComments);

    					$response[] = ['message' => 'Succesfully added a comment'];
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
           return ResponseBuilder::error(ApiCode::OBJECT_NOT_CREATED);
       }
   }
   else{
      return ResponseBuilder::error(ApiCode::WRONG_PROJECT_ID);
  }
}

}

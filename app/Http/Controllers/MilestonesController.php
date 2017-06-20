<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Milestones;
use App\milestones_comments;
use App\projects;
use Carbon\Carbon;

class MilestonesController extends Controller
{
    //
    public function insertMilestone(Request $milestone){
    	$newMilestone = new Milestones;
    	//$timePosted = Carbon::now()->format('y-m-d h:i:s');

    	//retrieve a project id by name use value to retrive one value
    	$projectId = projects::where('pName','=','Tontro')->value('_id');
    	$newMilestone->pId = $projectId;
    	$newMilestone->mDescription ="This is to test if I can post a milestone";
    	$newMilestone->save();
    	return redirect()->route('dashboard')->withSuccess('Successfully added a milestone');
    }

    /**
    *method to push a comments to a milestone
    **/
    public function insertComment(Request $mComment){
    	$comment = new milestones_comments;
    	$comment->uId = "skjfdhsj9827982139";
    	$comment->mComment = "very fascinating, she said, no one expected it to be such a success!!!";
 
    	$milestone = Milestones::where('_id','=','5946c2a79a8920078c1602e2')->first();

    	$milestone->mComments()->save($comment);
    	return redirect()->route('dashboard')->withSuccess('saved comment');
    }
}

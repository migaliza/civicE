<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\projects;
class projectController extends Controller
{
	

	/**
	*display the view page for adding a new project
	*/
	public function newProject(){
		return view('ProjectInput/newProject');
	}

	/**
	*function to display the page to navigate to other pages
	*/

	public function navigate($projectName){
		return view('Project/appProject')->with('projectN', rawurlencode($projectName));;
	}

	/**
	*add a new project
	*
	*/
	public function addNewProject(Request $request){
		//$newProject = Input::json();

		/*$project = new projects;

		$project->project_name = $newProject->project_name;
		$project->tier = $newProject->tier;
		$project->location_name = $newProject->location_name;
		$project->location_latitude = $newProject->location_latitude;
		$project->location_longitude = $newProject->location_longitude;
		$project->brief_description = $newProject->brief_description;
		$project->commencement_date = $newProject->commencement_date;
		$project->completion_date = $newProject->completion_date;
		$project->status = $newProject->status;
		$project->primary_activity = $newProject->primary_activity;
		$project->partnerships = $newProject->partnerships;
		$project->save();*/

		$project = new projects;

		$projectName = $request->input('projectName');
		$projectTier = $request->input('tier');
		$projectLocation = $request->input('location');
		$projectLatitude = $request->input('latitude');
		$projectLongitude = $request->input('longitude');
		$projectDescription = $request->input('description');
		$projectCommencement = $request->input('Commencement_date');
		$projectCompletion = $request->input('completion_date');
		$projectStatus = $request->input('status');
		$projectPrimary = $request->input('primary_activity');
		$projectPartnership = $request->input('partnerships');

		if(!empty($projectName)){
			$project->project_namee = $projectName; 
		}
		if(!empty($projectTier)){
			$project->tier = $projectTier;
		}
		if(!empty($projectLocation)){
			$project->location_name = $projectLocation;
		}
		if(!empty($projectLatitude)){
			$project->location_latitude= $projectLatitude;
		}
		if(!empty($projectLongitude)){
			$project->location_longitude = $projectLongitude;
		}
		if(!empty($projectDescription)){
			$project->brief_description = $projectDescription;
		}
		if(!empty($projectCommencement)){
			$project->commencement_date = $projectCommencement;
		}
		if(!empty($projectCompletion)){
			$project->completion_date = $projectCompletion;
		}
		if(!empty($projectStatus)){
			$project->status = $projectStatus;
		}
		if(!empty($projectPrimary)){
			$project->primary_activity = $projectPrimary;
		}
		if(!empty($projectPartnership)){
			$project->partnerships = $projectPartnership;
		} 

		echo $projectCompletion;


		$project->save();
		return Redirect::back()->withSuccess('Project has been successfully created');

		//return Redirect::route('/Project/New')->withSuccess('Project has successfully been created.');

	}

	/**
	*function to display the milestone view page
	*/

	public function newMilestone($projectName){

		return view('ProjectInput/milestone')->with('projectNamee', rawurlencode($projectName));
	}

	/**
	*function to add a milestone
	*/
	public function addNewMilestone(Request $milestone){
		//dd('here to add milestone');
		$projectN = $milestone->input('project_name');
		$milestoneInput = $milestone->input('milestone');

       //dd(rawurldecode($projectN));
		if(!empty($milestoneInput)){
			$project = projects::where('project_namee','=',rawurldecode($projectN))->push('milestones',array('milestone_description' => $milestoneInput));
		}

		return Redirect::back()->withSuccess('Succesfully inserted a milestone');
	}	


	/**
	*function to display the event view page
	*/
	public function newEvent($projectName){  

		return view('ProjectInput/event')->with('projectNamee', rawurlencode($projectName));
	}

	/**
	*function to add a new event
	*/

	public function addEvent(Request $event){
		$projectN = $event->input('project_name');

		$newEvent = $event->input('List_of_event');
		$eventDate = $event->input('date');
		$eventLocation = $event->input('eventLocation');
		$eventBrief = $event->input('eventBrief');
		$eventAttendance = $event->input('attendance');
		$eventOutcome = $event->input('eventOutcome');
		if(!empty($newEvent) && !empty($eventDate) && !empty($eventLocation) && !empty($eventBrief) && !empty($eventAttendance) && !empty($eventOutcome) ){

			$project = Project::where('project_namee', '=', rawurldecode($projectN))->push('Events',array('list_of_event' => $newEvent,'event_Date' => $eventDate,'event_location' => $eventLocation,'event_brief' => $eventBrief,'attendance' => $eventAttendance, 'event_Outcome' => $eventOutcome));
		}
		elseif(!empty($newEvent) && empty($eventDate) && !empty($eventLocation) && !empty($eventBrief) && !empty($eventAttendance) && !empty($eventOutcome) ){
			$project = Project::where('project_namee', '=', rawurldecode($projectN))->push('Events',array('list_of_event' => $newEvent,'event_location' => $eventLocation,'event_brief' => $eventBrief,'attendance' => $eventAttendance, 'event_Outcome' => $eventOutcome));
		}
		elseif(!empty($newEvent) && !empty($eventDate) && !empty($eventLocation) && !empty($eventBrief) && empty($eventAttendance) && !empty($eventOutcome) ){
			$project = Project::where('project_namee', '=', rawurldecode($projectN))->push('Events',array('list_of_event' => $newEvent,'event_Date' => $eventDate,'event_location' => $eventLocation,'event_brief' => $eventBrief, 'event_Outcome' => $eventOutcome));

		}
		elseif(!empty($newEvent) && !empty($eventDate) && !empty($eventLocation) && !empty($eventBrief) && !empty($eventAttendance) && empty($eventOutcome) ){
			$project = Project::where('project_namee', '=', rawurldecode($projectN))->push('Events',array('list_of_event' => $newEvent,'event_Date' => $eventDate,'event_location' => $eventLocation,'event_brief' => $eventBrief,'attendance' => $eventAttendance));
		}
		elseif(empty($newEvent) && empty($eventDate) && empty($eventLocation) && !empty($eventBrief) && empty($eventAttendance) && empty($eventOutcome) ){
			$project = Project::where('project_namee', '=', rawurldecode($projectN))->push('Events',array('event_brief' => $eventBrief));
		}

		return Redirect::back()->withSuccess('successfully added an event');

	}

	/**
    *display the grant view
    *
    */
	public function newGrant($projectName){
		return view('ProjectInput/grant')->with('projectNamee', rawurlencode($projectName));
	}


	/**
	*function to add new funding information
	*
	*/
	public function addNewFunding(Request $grant){
		$projectN = $grant->input('project_name');

		$grantName = $grant->input('grant_name');
		$grantAmount = $grant->input('grant_amount');
		$grantFundingCycle = $grant->input('funding_cycle');

		if(!empty($grantName) && !empty($grantAmount) && !empty($grantFundingCycle)){
			$project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Grand_info',array('grant_name' => $grantName,'grant_amount' => $grantAmount,'funding_cycle' => $grantFundingCycle));
		}
		elseif(!empty($grantName) && !empty($grantAmount) && empty($grantFundingCycle)){
			$project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Grand_info',array('grant_name' => $grantName,'grant_amount' => $grantAmount));
		}
		elseif(!empty($grantName) && empty($grantAmount) && empty($grantFundingCycle)){
			$project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Grand_info',array('grant_name' => $grantName));
		}
		elseif(!empty($grantName) && empty($grantAmount) && !empty($grantFundingCycle)){
			$project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Grand_info',array('grant_name' => $grantName,'funding_cycle' => $grantFundingCycle));
		}


		return Redirect::back()->withSuccess('Succesfully inserted new funding info in '. $projectN);

	}


	/**
    *display the upcoming view
    *
    */
    public function newUpcoming($projectName){
        return view('ProjectInput/upcoming')->with('projectNamee', rawurlencode($projectName));
    }

    /**
    *add an upcoming event
    *
    */
    public function addUpcoming(Request $upcoming){
        $projectN = $upcoming->input('project_name');

        $newUpcoming = $upcoming->input('upcoming');
        

        if(!empty($newUpcoming)){
            $project = Project::where('project_namee', '=', rawurldecode($projectN))->push('Upcoming',array('upcoming' => $newUpcoming));
        }


        return Redirect::back()->withSuccess('successfully inserted upcoming in'.$projectN);

    }


    /**
    *display the target population view
    *
    */

    public function newTarget($projectName){
        return view('ProjectInput/target')->with('projectNamee', rawurlencode($projectName));
    }

    /**
    *add target population
    *
    */

    public function addTargetPopulation(Request $target){
        $projectN = $target->input('project_name');
        $newTarget = $target->input('target_name');
        $project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Target_population', array('target_name' => $newTarget));

        return Redirect::back()->withSuccess('successfully inserted target population in '.$projectN);
    }




	/**
	*function to add new sentiment analysis
	*
	*/
	public function addNewSentiment(Request $request){

	}

	/**
    *display the impact sector view
    *
    */
     public function newImpact($projectName){
        return view('ProjectInput/impact')->with('projectNamee', rawurlencode($projectName));
    }


	/**
	*function  to add impact sectors
	*/
	public function addNewImpactSector(Request $sector){
		$projectN = $sector->input('project_name');
        $newImpact = $sector->input('sector_name');
       // dd($newImpact);
        if(!empty($newImpact)){
            $project = projects::where('project_namee','=', rawurldecode($projectN))->push('Impact_sectors', array('sector_name' => $newImpact));
        }

        

        return Redirect::back()->withSuccess('Succesfully inserted impactsector in '.$projectN);
	}

	/**
    *display the lessons learntview
    *
    */
    public function newLesson($projectName){
        return view('ProjectInput/lesson')->with('projectNamee', rawurlencode($projectName));
    }



	
    /**
    *add an Lessons Learnt
    *
    */
    public function addLesson(Request $lessons){
        $projectN = $lessons->input('project_name');

        $lesson = $lessons->input('lesson');
        $position = $lessons->input('position');

        if(!empty($lesson) && !empty($position)){
            $project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Lessons_learnt',array('lesson' => $lesson,'position' => $position));
        }
        elseif(!empty($lesson) && empty($position)){
            $project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Lessons_learnt',array('lesson' => $lesson));
        }
        elseif(empty($lesson) && !empty($position)){
            $project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Lessons_learnt',array('position' => $position));
        }

        return Redirect::back()->withSuccess('Succesfully inserted a lesson in '. $projectN);

    }


    /**
    *function to display target track view
    */
    public function addPopTrack($projectName){
    	return view('ProjectInput/targetPopulationTrack')->with('projectNamee', rawurlencode($projectName));

    }

    /**
	*function  to add impact sectors
	*/
	public function addPopulationTrack(Request $trackP){
		//dd('here to add target');
		$projectN = $trackP->input('project_name');
        $baseline = $trackP->input('target_baseline');
        $recent = $trackP->input('target_recent');
       // dd($newImpact);
        if(!empty($baseline)&&!empty($recent)){
            $project = projects::where('project_namee','=', rawurldecode($projectN))->push('Population_Track', array('target_baseline' => $baseline,'recent'=>$recent));
        }
        else if(!empty($baseline) && empty($recent)){
        	$project = projects::where('project_namee','=', rawurldecode($projectN))->push('Population_Track', array('target_baseline' => $baseline));
        }
        else if(empty($baseline) && !empty($recent)){
        	$project = projects::where('project_namee','=', rawurldecode($projectN))->push('Population_Track', array('recent'=>$recent));
        }

        

        return Redirect::back()->withSuccess('Succesfully inserted impactsector in '.$projectN);
	}



    /**
    *function to display volunteer track
    */
    public function addVolTrack($projectName){
    	return view('ProjectInput/volunteertrack')->with('projectNamee', rawurlencode($projectName));

    }

    /**
	*function  to add impact sectors
	*/
	public function newVolTrack(Request $volTrack){
		$projectN = $volTrack->input('project_name');
        $baseline = $volTrack->input('volunteer_baseline');
        $recent = $volTrack->input('volunteer_recent');
       // dd($newImpact);
        if(!empty($baseline)&&!empty($recent)){
            $project = projects::where('project_namee','=', rawurldecode($projectN))->push('Volunteer_Track', array('target_baseline' => $baseline,'recent'=>$recent));
        }
        else if(!empty($baseline) && empty($recent)){
        	$project = projects::where('project_namee','=', rawurldecode($projectN))->push('Volunteer_track', array('target_baseline' => $baseline));
        }
        else if(empty($baseline) && !empty($recent)){
        	$project = projects::where('project_namee','=', rawurldecode($projectN))->push('Volunteer_track', array('recent'=>$recent));
        }

        

        return Redirect::back()->withSuccess('Succesfully inserted impactsector in '.$projectN);
	}

	
}

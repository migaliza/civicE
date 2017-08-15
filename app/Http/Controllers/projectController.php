<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\projects;
use App\ProjectLead;

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
		
		$project = new projects;

		if(!empty($request->input('projectName'))){
			$project->pName = $request->input('projectName');
		}

		if(!empty($request->input('facultyId'))){
			$project->facultyId = $request->input('facultyId');
		}
		if(!empty($request->input('town'))){
			$project->town = $request->input('town');
		}
		if(!empty($request->input('region'))){
			$project->region = $request->input('region');
		}
		if(!empty($request->input('latitude'))){
			$project->latitude = $request->input('latitude');
		}
		if(!empty($request->input('longitude'))){
			$project->longitude = $request->input('longitude');
		}
		if(!empty($request->input('description'))){
			$project->description = $request->input('description');
		}
		if(!empty($request->input('Commencement_date'))){
			$dateCommence = strtotime($request->input('Commencement_date'));
			$project->commencementDate = date('Y-M-d',$dateCommence);
		}
		if(!empty($request->input('completion_date'))){ 
			$dateComplete = strtotime($request->input('completion_date'));
			$project->completionDate = date('Y-M-d', $dateComplete);
		}
		if(!empty($request->input('primary_activity'))){
			
			$project->primaryActivity = $request->input('primary_activity');
		}
		if(!empty($request->input('impactPopulation'))){
			$impactPopulation = $request->input('impactPopulation');
			$impactPopulation = implode(',',$impactPopulation);
			$project->impactPopulation = $impactPopulation;
		}//array input
		///////////////////////////////////////////////////////
		if(!empty($request->input('impactSectors'))){
			$impact = $request->input('impactSectors');
			$impact = implode(',',$impact);
			$project->impactSector = $impact;
		} 

		

		$project->save();
		$response[] = ['message' => 'Succesfully added a new project'];
		return redirect('/dashboard');


	}

	public function addProjectLead(Request $projectLead){
		$pId = $projectLead->input('pId');
		$pLeadId = $projectLead->input('projectLeadId');
		if(!empty($pId)){
			$project = projects::where('_id','=',$pId)->first();
			if(!is_null($project)){
				if(!empty($pLeadId)){
					$pLead = new ProjectLead;
					$pLead->projectLeadId = $pLeadId;
					$project->projectLead()->save($pLead);
					$response[] = ['message' => 'Succesfully added project Lead to project'];
					return ResponseBuilder::success($response);
				}
				else{
					return ResponseBuilder::error(ApiCode::WRONG_PROJECT_LEAD_ID);
				}
				
			}
			else{

			}
		}
		else{
			return ResponseBuilder::error(ApiCode::WRONG_PROJECT_ID);
		}
		
		
	}


    /**
    *add an upcoming event
    *
    */
    public function addUpcoming(Request $upcoming){
    	//dd("here done");
    	$projectN = $upcoming->input('project_name');

    	$newUpcoming = $upcoming->input('upcoming');
    	

    	if(!empty($newUpcoming)){
    		$project = projects::where('project_namee', '=', rawurldecode($projectN))->push('Upcoming',array('upcoming' => $newUpcoming));
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


	/**
	*display the view for funding rational
	*/
	public function addNewFundingRational($projectName){
		return view('ProjectInput/fundingRationale')->with('projectNamee',rawurlencode($projectName));

	}

	/**
	*add a new funding rational to tier 2 projects
	*/
	public function addFundingRational(Request $fRational){
		
		$projectN = $fRational->input('project_name');
		$fundingRational = $fRational->input('funding_rational');
		
		if(!empty($fundingRational)){
			$project = projects::where('project_namee','=',rawurldecode($projectN))->push('Funding_rational',array('funding_rational' => $fundingRational));
		}

		return Redirect::back()->withSuccess('Succesfully inserted funding rational');

	}

	/**
	*impactSectors
	*/
	public function impactSector(Request $request){
		$pId = $request->input('pId');
		if(!empty($pId)){
			$project = projects::where('_id','=',$pId)->value('impactSector');
			if(!is_null($project)){
				$impactSect[] = implored(',', $project);
				dd($impactSect);


			}
			else{

			}
		}
		else{

		}
	}

	
}

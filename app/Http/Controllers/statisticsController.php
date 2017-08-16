<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use App\volCumulative;
use App\popCumulative;
use App\trackPopulation;
use App\trackVolunteer;
use App\statistics;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use App\ApiCode;


class statisticsController extends Controller
{
    /**
    *function to display volunteer track
    */
    public function addVolTrack($projectId){
      return view('ProjectInput/volunteerTrack')->with('projectId', $projectId);
    }

    /**
    *function to display target track view
    */
    public function addPopTrack($projectId){
      return view('ProjectInput/targetPopulationTrack')->with('projectId',$projectId);

    }


  /*
    *method to instert new statistics
    */

  public function statistcsCollection($statistics){
    $stats = new statistics;
    //$projectId = $statistics->input('pId');*/
    $project = projects::where('_id','=',$statistics)->first();
    if(!is_null($project)){
      $project->pStatistics()->save($stats);
    }
  }

  
    /*
    *method to instert volunteer track
    */
    public function insertVolunteer(Request $volunteer){

      $volTrack = new trackVolunteer;
      $pId = $volunteer->input('pId');
      $volCum = new volCumulative;
      //dd($pId);

      if(!empty($pId)){
       $project = projects::where('_id','=',$pId)->first();
       if(!is_null($project)){
        if(is_null($project->pStatistics)){
          $this->statistcsCollection($pId);
        }
        else{
          //dd('skjd');
          $baseline =(int)$volunteer->input('baseline');
          $volTrack->baseline = $baseline;
          $volTrack->current =$baseline;
          $statistics = $project->pStatistics; //access an embedded collection
          $statistics->trackVolunteer()->save($volTrack);
          $volCum->volCumulative = $baseline;
          $statistics->volCumulative()->save($volCum);
          return redirect('/dashboard');
        }

      }
    }
  }

   /**
    *function to display volunteer track
    */
   public function editPopulationTrackView($projectId){
    return view('ProjectInput/editTargetPopulation')->with('projectId', $projectId);
  }

    /*
    *method to instert population track if the it is 
    */
    public function insertPopulation(Request $population){

      $pId = $population->input('pId');
      $popCum = new popCumulative;
      $popTrack = new trackPopulation;

      if(!empty($pId)){
        $project = projects::where('_id','=',$pId)->first();
        if(!is_null($project)){
          if(is_null($project->pStatistics)){
            $this->statistcsCollection($pId);
          }
          else{
            $baseline =(int)$population->input('baseline');
            $popTrack->baseline = $baseline;
            $popTrack->current =$baseline;
            $statistics = $project->pStatistics;

            $statistics->trackPopulation()->save($popTrack);
            $popCum->popCumulative = $baseline;
            $statistics->popCumulative()->save($popCum);
            return redirect('/dashboard');

          }
          //
        }
      }

    }

    /**
    *function to display volunteer track
    */
    public function editVolunteerTrackView($projectId){
      return view('ProjectInput/editVolunteer')->with('projectId', $projectId);
    }

   /*
   *Edit Volunteer track by editing the current and the cumulative values
   */
   public function editVolunteerTrack(Request $volunteer){
    $pId = $volunteer->input('pId');
    $volDifference = (int)$volunteer->input('difference');

    if(!empty($pId)){
      $project = projects::where('_id','=',$pId)->first();
      if(!is_null($project)){
        if(!is_null($project->pStatistics)){
          $statistics = $project->pStatistics;
          if(!is_null($statistics->trackVolunteer)){
            $volTrack = $statistics->trackVolunteer;
            $volCum = new volCumulative;

            $cumulative = $volDifference + $volTrack->current;
            $volTrack->current = $cumulative;
            $volTrack->difference = $volDifference;
            $volCum->volCumulative = $cumulative;
            $volTrack->save();
            $statistics->volCumulative()->save($volCum);

            $response[] = ['message' => 'Succesfully editted volunteer track record'];
            return redirect('/dashboard');
          }

        }
      }
    }

  }

   /*
   *Edit population track by editing the current and the cumulative values
   *parameters: project id, difference, 
   */
   public function editPopulation(Request $population){
    $pId = $population->input('pId');
    $popDifference = (int)$population->input('difference');

    if(!empty($pId)){
      $project = projects::where('_id','=',$pId)->first();
      if(!is_null($project)){
        if(!is_null($project->pStatistics)){
          $statistics = $project->pStatistics;
          if(!is_null($statistics->trackPopulation)){
            $popTrack = $statistics->trackPopulation;
            $popCum = new popCumulative;
            $cumulative = $popDifference + $popTrack->current;

            $popTrack->current = $cumulative;
            $popTrack->difference = $popDifference;
            $popCum->popCumulative = $cumulative;
            $popTrack->save();
            $statistics->popCumulative()->save($popCum);

          //$response[] = ['message' => 'Succesfully editted population track record'];
            return redirect('/dashboard');
          }
        }
      }
    }
  }

  /**
  *retrieve target population values
  */
  public function retrieveTargetPopulation(Request $request){
    $pId = $request->input('pId');
    $track = $request->input('track');
    if(!empty($pId)){
      $statistics = projects::where('_id','=',$pId)->value('pStatistics');
      if(!is_null($statistics)){
        if($track == 'population'){
          $population = $statistics->popCumulative;
          if(!is_null($population)){
            foreach ($population as $targetPopulation) {
              $resp[] = [
              'cumulative' => $targetPopulation->popCumulative,
              'date' => $targetPopulation->updated_at,
              ];
            }
          }
        }
        elseif($track == 'volunteer'){
          $volunteer = $statistics->volCumulative;
          if(!is_null($volunteer)){
            foreach ($volunteer as $volunteerTrack) {
              $resp[] = [
              'cumulative' => $volunteerTrack->volCumulative,
              'date' => $volunteerTrack->updated_at,
              ];
            }
          }
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

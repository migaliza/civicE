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
  /*
    *method to instert new statistics
    */
    public function statistcsCollection(Request $statistics){
      $stats = new statistics;
      $projectId = $statistics->input('pId');
      if(!empty($projectId)){
        $project = projects::where('_id','=',$projectId)->first();
        $project->pStatistics()->save($stats);
        $response[] = ['message' => 'Succesfully added statistics to project'];
        return ResponseBuilder::success($response);
      }
      else{
        //$data[] = ['message' => 'provide correct project ID'];
        return ResponseBuilder::error(ApiCode::WRONG_PROJECT_ID);
      }
      
    }

  
    /*
    *method to instert volunteer track
    */
    public function insertVolunteer(Request $volunteer){
      $volTrack = new trackVolunteer;
      $pId = $volunteer->input('pId');
      $volCum = new volCumulative;

      if(!empty($pId)){
          if(!empty($volunteer->input('baseline')) && ($volunteer->input('baseline')>=0 )){
          $baseline =(int)$volunteer->input('baseline');
          $volTrack->baseline = $baseline;
          $volTrack->current =$baseline;

          $project = projects::where('_id','=',$pId)->first();
          $statistics = $project->pStatistics; //access an embedded collection
          $statistics->trackVolunteer()->save($volTrack);
          $volCum->volCumulative = $baseline;
          $statistics->volCumulative()->save($volCum);

          $response[] = ['message' => 'Succesfully added a volunteer statistics to project'];
          return ResponseBuilder::success($response);
        }
        else{
          return ResponseBuilder::error(ApiCode::FIELDS_NOT_ENTERED_STATISTICS);
        } 
      }
      else{
        return ResponseBuilder::error(ApiCode::WRONG_PROJECT_ID);
      }
    }

    /*
    *method to instert population track if the it is 
    */
    public function insertPopulation(Request $population){
      $pId = $population->input('pId');
      $popCum = new popCumulative;
      $popTrack = new trackPopulation;
      if(!empty($pId)){
        if(!empty($population->input('baseline')) &&($population->input('baseline') >=0)){
          $baseline =(int)$population->input('baseline');
          $popTrack->baseline = $baseline;
          $popTrack->current =$baseline;

          $project = projects::where('_id','=',$pId)->first();
          $statistics = $project->pStatistics; //access an embedded collection
          $statistics->trackPopulation()->save($popTrack);
          $popCum->popCumulative = $baseline;
          $statistics->popCumulative()->save($popCum);

          $response[] = ['message' => 'Succesfully added population track record'];
          return ResponseBuilder::success($response);
        }
        else{
          return ResponseBuilder::error(ApiCode::FIELDS_NOT_ENTERED_STATISTICS);
        }
      }
      else{
        return ResponseBuilder::error(ApiCode::WRONG_PROJECT_ID);
      }
    }

   /*
   *Edit Volunteer track by editing the current and the cumulative values
   */
   public function editVolunteerTrack(Request $volunteer){
    $pId = $volunteer->input('pId');
    $volDifference = (int)$volunteer->input('difference');
 
    
    if(!empty($pId)){
      $project = projects::where('_id','=',$pId)->first();
      $statistics = $project->pStatistics;
      $volTrack = $statistics->trackVolunteer;
      $volCum = new volCumulative;

      if(!is_null($volTrack)){
          if(!empty($volDifference)){
          $cumulative = $volDifference + $volTrack->current;
    
          $volTrack->current = $cumulative;
          $volTrack->difference = $volDifference;
          $volCum->volCumulative = $cumulative;
          $volTrack->save();
          $statistics->volCumulative()->save($volCum);

          $response[] = ['message' => 'Succesfully editted volunteer track record'];
          return ResponseBuilder::success($response);
        }
      else{
          return ResponseBuilder::error(ApiCode::FIELDS_NOT_ENTERED_STATISTICS);
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

   /*
   *Edit population track by editing the current and the cumulative values
   *parameters: project id, difference, 
   */
   public function editPopulation(Request $population){
    $pId = $population->input('pId');
    $popDifference = (int)$population->input('difference');

    if(!empty($pId)){
      $project = projects::where('_id','=',$pId)->first();
      $statistics = $project->pStatistics;
      $popTrack = $statistics->trackPopulation;
      //dd($popTrack);
      $popCum = new popCumulative;
      if(!is_null($popTrack)){
          if(!empty($popDifference)){
          $cumulative = $popDifference + $popTrack->current;
    
          $popTrack->current = $cumulative;
          $popTrack->difference = $popDifference;
      
          $popCum->popCumulative = $cumulative;
          $popTrack->save();
          $statistics->popCumulative()->save($popCum);

          $response[] = ['message' => 'Succesfully editted population track record'];
          return ResponseBuilder::success($response);
      }
      else{
          return ResponseBuilder::error(ApiCode::FIELDS_NOT_ENTERED_STATISTICS);
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

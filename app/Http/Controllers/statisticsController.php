<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projects;
use App\trackPopulation;
use App\trackVolunteer;
use App\statistics;

class statisticsController extends Controller
{
	/*
    *method to instert new statistics
    */
    public function statistcsCollection(Request $statistics){
    	$stats = new statistics;
    	$stats->sDescription = "total number of volunteers and the target population";
    	$project = projects::where('_id','=','58dd18779a89200bd5147202')->first();
    	$project->pStatistics()->save($stats);
    }

  
    /*
    *method to instert volunteer track
    */
    public function insertVolunteer(Request $volunteer){
    	$volTrack = new trackVolunteer;
    	/*if(!empty($volunteer->input('baseline'))){
    	}*/
    	/*if(!empty($volunteer->input('current'))){	
    	}*/
    	$baseline = $volTrack->baseline = 98;
    	$current = $volTrack->current = 90;
    	$volTrack->cumulative = $baseline + $current;
    	$project = projects::where('_id','=','58dd18779a89200bd5147202')->first();
    	$statistics = $project->pStatistics; //access an embedded collection
    	$statistics->trackVolunteer()->save($volTrack);
    }

    /*
    *method to instert population track if the it is 
    */
    public function insertPopulation(Request $population){
    	$popTrack = new trackPopulation;
    	/*if(!empty($volunteer->input('baseline'))){
    	}*/
    	/*if(!empty($volunteer->input('current'))){	
    	}*/
    	$baseline = $popTrack->baseline = 98;
    	$current = $popTrack->current =90;
    	$popTrack->cumulative = $baseline + $current;
    	$project = projects::where('_id','=','58dd18779a89200bd5147202')->first();
    	$statistics = $project->pStatistics; //access an embedded collection
    	$statistics->trackPopulation()->save($popTrack);
    }

   /*
   *Edit Volunteer track by editing the current and the cumulative values
   */
   public function editVolunteerTrack(Request $volunteer){
   	$project = projects::where('_id','=','58dd18779a89200bd5147202')->first();
   	$statistics = $project->pStatistics;
   	$volunteer = $statistics->trackVolunteer;
   	$cumulative = $volunteer->cumulative;
   	$current = $volunteer->current = 10;
   	$volunteer->cumulative = $cumulative + $current;
   	$volunteer->save();
   }

   /*
   *Edit population track by editing the current and the cumulative values
   */
   public function editPopulationTrack(Request $volunteer){
   	$project = projects::where('_id','=','58dd18779a89200bd5147202')->first();
   	$statistics = $project->pStatistics;
   	$population = $statistics->trackPopulation;
   	$cumulative = $population->cumulative;
   	$current = $population->current = 10;
   	$population->cumulative = $cumulative + $current;
   	$population->save();
   }
}

<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Funding_Application extends Eloquent
{
    //
    protected $projectName;
    protected $synopsis;
   // protected $expenditurePlan; //file


    /**
    *embed proejct lead
    */
    public function projectLeaders(){
    	return $this->embedsMany('App\FAProjectLeaders');
    }

    /**
    *embed project proposal
    */
    public function projectProposal(){
    	return $this->embedsOne('App\ProjectProposal');
    }

    /**
    *embed personal Motivation
    */
    public function motivation(){
    	return $this->embedsOne('App\PersonalMotivation');
    }
}

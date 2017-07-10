<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Funding_Application extends Eloquent
{
    //
    protected $pTitle;
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
    *embeds one primary lead
    */
    public function primaryLead(){
        return $this->embedsOne('App\PrimaryProjectLead');
    }

    /**
    *embeds many project lead motivation
    */
    public function  motivation(){
        return $this->embedsMany('App\PMProjectLead
            ');
    }  

}

<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class statistics extends Eloquent
{
	//protected $sDescription;
    /*
    *embed track population collection to project
    */
    public function trackPopulation(){
        return $this->embedsOne('App\trackPopulation');
    }

     /*
    *embed track volunteer collection to project
    */
     public function trackVolunteer(){
        return $this->embedsOne('App\trackVolunteer');
     }

    /*
    *embed volunteer cumulative on a statics in a project: nested embed
    */
     public function volCumulative(){
        return $this->embedsMany('App\volCumulative');
     }

     /*
    *embed population cumulative on a statics in a project: nested embed
    */
     public function popCumulative(){
        return $this->embedsMany('App\popCumulative');
     }

   
}

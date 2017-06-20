<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class statistics extends Eloquent
{
	protected $sDescription;
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
   
}

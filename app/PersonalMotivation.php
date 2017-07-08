<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class PersonalMotivation extends Eloquent
{
    //
    /**
    *embeds many projectleads motivations
    */
    public function projectLeadMotivation(){
    	return $this->embedsMany('App\PMProjectLead
    		')
    } 
}

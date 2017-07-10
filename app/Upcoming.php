<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Upcoming extends Eloquent
{
    //
    protected $upcoming;

    /*
    *embeds many comments 
    */
    public function upComments(){
    	return $this->embedsMany('App\UpcomingComments');
    }
}

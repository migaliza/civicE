<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\milestone_comments;

class Milestones extends Eloquent
{
    //
    protected $collection ="milestones";
    protected $pId;
    protected $mDescription;
   

    public function mComments(){
    	//dd("reached here");
    	return $this->embedsMany('App\milestones_comments');
    }
}

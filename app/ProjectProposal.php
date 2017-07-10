<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ProjectProposal extends Eloquent
{
    //
    protected $population;
    protected $community;
    protected $youthChildren;  //yes or no
    protected $assets;
    protected $approach;
    protected $measureSuccess;
    protected $impediments;
    protected $continue; //yes or no answer;
    protected $volunteers;
    protected $shareSuccess;

}

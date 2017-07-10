<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class fundingInfo extends Eloquent
{
    //
    protected $fPartner;
    protected $fAmount;
    protected $fObjective;
    protected $fDescription;

    public function expenditure(){
    	return $this->embedsMany('App\Expenditure');
    }
}

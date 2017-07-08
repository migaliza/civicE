<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class PMProjectLead extends Eloquent
{
    //
    protected $leadId;
    protected $motivation;
    protected $cv;
}

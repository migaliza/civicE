<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class trackVolunteer extends Eloquent
{
    //
    protected $baseline;
    protected $current;
    protected $cumulative;
}

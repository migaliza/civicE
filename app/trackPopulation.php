<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class trackPopulation extends Eloquent
{
    //
    protected $baseline;
    protected $difference;
    protected $current;

}

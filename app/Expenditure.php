<?php

namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Expenditure extends Eloquent
{
    //
    protected $purpose;
    protected $amount;
    protected $description;


}

<?php
namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class projects extends Eloquent
{
   

     //connection
    protected $connection = 'mongodb';
    //collection to store
    protected  $collection = 'projects';

    protected $project_name; 
    protected $tier;
    protected $location_name;// = ['name','longitude','latitude'];
    protected $location_latitude;
    protected $location_longitude;
    protected $brief_description;
    protected $commencement_date;//=['commencement_date'];
    protected $completion_date;//s=['completion_date'];
    protected $status;
    protected $primary_activity;
    protected $partnerships;

    /*
    *embed statistics collection to project
    */
    public function pStatistics(){
        return $this->embedsOne('App\statistics');
    }

    /*
    *embed funding info collection to project
    */

    public function fundingInfo(){
        return $this->embedsMany('App\fundingInfo');
    }



 
}

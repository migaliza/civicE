<?php
namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Model;
//use Milestone;

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
   

 
}

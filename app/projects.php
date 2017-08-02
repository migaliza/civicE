<?php
namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class projects extends Eloquent
{
 

     //connection
    protected $connection = 'mongodb';
    //collection to store
    protected  $collection = 'projects';

    protected $pName; 
    protected $facultyId;
    protected $town;// = ['name','longitude','latitude'];
    protected $region;
    protected $latitude;
    protected $longitude;
    protected $description;
    protected $commencementDate;//=['commencement_date'];
    protected $completionDate;//s=['completion_date'];
    protected $primaryActivity; //an array
    protected $impactPopulation;//an array

    

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

    /*
    *embed expenditure files
    */
    public function expenditureFIles(){
        return $this->embedsMany('App\ExpenditureFIles');
    }

    /*
    *embed projectLead
    */
    public function projectLead(){
        return $this->embedsMany('App\ProjectLead');
    }

    /*
    *embed partnerships
    */
    public function partnerships(){
        return $this->embedsMany('App\Partnerships');
    }

    /*
    *embeds many upcoming
    */
    public function upcoming(){
        return $this->embedsMany('App\Upcoming');
    }



    
}

<?php

namespace App\Transformer;

use Illuminate\Database\Eloquent\Model;
use App\projects;
class ProjectTransformer extends Model
{
    //
    public function transform( projects $project){
		return [
		 'project' =>  $project->project_name,
		 'tier' => $project->tier;
		 'Location' => $project->location_name;
		 'latitude' => $project->location_latitude;
		 'longitude' => $project->location_longitude;
		 'project_description' => $project->brief_description;
		 'commencement' => $project->commencement_date;
		 'completion' => $project->completion_date;
		 'status' => $project->status;
		 'primary_activity' => $project->primary_activity;
		 'partnerships' => $project->partnerships;
		 


		];
	}
}

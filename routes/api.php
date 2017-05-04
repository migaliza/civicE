<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//routes to be used by the API calls
//list project name and description
Route::get('/projects/project/description', 'projectRetriveController@projectNameDescription');

//list location funding data of the project

Route::get('Projects/funding/{projectName}','projectRetriveController@projectFunding');

//list all project data
Route::get('Projects/{projectName}','projectRetriveController@projectData');

//test response
Route::get('Projects/all/test','testingResponse@books');

//create a new project
//Route::Post('Projects/Create');

Route::get('/projects/funding/{projectName}','projectRetriveController@projectFunding');

//list all project data
Route::get('/projects','projectRetriveController@projectData');

//create a new project
Route::Post('/projects/create/project','projectController@addNewProject');

/**add new milestone*/
Route::post('/projects/milestone/addMilestone','projectController@addNewMilestone'); 

/** add new event */
Route::post('/project/event/new','projectController@addEvent');

/** add new upcoming */
Route::post('/project/upcoming/new','projectController@addUpcoming');

/** add new impact */
Route::post('/project/impact/new','projectController@addNewImpactSector');

/** add new grant info */
Route::post('/project/grant/new', 'projectController@addNewFunding');

/**add new target */
Route::post('/project/target/new', 'projectController@addTargetPopulation');

/**add new lesson */
Route::post('/project/lesson/new','projectController@addLesson');

/**add volunteer track */
Route::post('/project/volunteer/track/add','projectController@newVolTrack');

/**add target population track*/
Route::post('/project/target/population/add','projectController@addPopulationTrack');


//create a new sentiment analysis
//Route::Post('Projects/Sentiment');

//retrieve project by name
//Route::get('Project/{ProjectName}');



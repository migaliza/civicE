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

//list all project data
Route::get('Projects/{projectName}','projectRetriveController@projectData');

//test response
Route::get('Projects/all/test','testingResponse@books');


//Route::Post('Projects/Create');

Route::get('/projects/funding','fundingInfoController@retrieveFunding');

/** display project tier */
Route::get('/projects/{tier}','projectRetriveController@tiers');

//list all project data
Route::get('/projects','projectRetriveController@projectData');

//create a new project
Route::post('/projects/create/project/add','projectController@addNewProject');

/** display project tier */
Route::get('/projects/{tier}','projectRetriveController@tiers');

/**add new milestone*/
//Route::get('/projects/milestone/new','projectController@addNewMilestone'); 

/** add new event */
Route::post('/project/event/new','projectController@addEvent');



/** add new impact */
Route::post('/project/impact/new','projectController@addNewImpactSector');
/** add new impact */
Route::get('/project/impactsector/retrieve','projectRetriveController@impactSector');

Route::get('/project/impactpopulation/retrieve','projectRetriveController@impactPopulation');

Route::get('/project/impactpopulation/cumulative','statisticsController@retrieveTargetPopulation');

/** add new grant info */
Route::post('/project/grant/new', 'fundingInfoController@insertFundingInfo');

/**add new target */
Route::post('/project/target/new', 'projectController@addTargetPopulation');

/**add new lesson */
Route::post('/project/lesson/new','projectController@addLesson');

/**add volunteer track */
Route::post('/project/volunteer/track/add','projectController@newVolTrack');

/**add target population track*/
Route::post('/project/target/population/add','projectController@addPopulationTrack');

/**add a new funding rational for tier 2 projects */
Route::post('/project/funding/rational/new','projectController@addFundingRational');

/**retrieve project information */
Route::get('/project/information/','projectRetriveController@projectInformation');

/**retrieve project information */
Route::get('/project/track/population','projectRetriveController@trackPopulation');

/**retrieve project information */
Route::get('/project/track/volunteers','projectRetriveController@trackVolunteer');

/**retrieve project information */
Route::get('/projects/project/id','projectRetriveController@projectById');


/**milestones **/
Route::post('/project/milestone/new','MilestonesController@insertMilestone');
Route::get('/project/milestone/retrieve','MilestonesController@retrieveMilestone');
Route::get('/project/milestone/comment/new','MilestonesController@insertComment');

/*
*Statistics
*/

/**route to add new statistics to a project to a project*/
Route::get('/project/statistics/new','statisticsController@statistcsCollection');

/**route to add new volunteer track to a project to a project*/
Route::post('/project/statistics/volunteer/track/new','statisticsController@insertVolunteer');

/**route to add new population track to a project to a project*/
Route::post('/project/statistics/population/track/new','statisticsController@insertPopulation');

/**route to edit a volunteer track to a project to a project*/
Route::post('/project/statistics/volunteer/track/edit','statisticsController@editVolunteerTrack');


/**route to edit population track to a project to a project*/
Route::post('/project/statistics/population/track/edit','statisticsController@editPopulation');

/**
*funding info
*/
Route::get('/project/fundinginfo/new','fundingInfoController@insertFundingInfo');
//retrieve values to edit on funding info
Route::get('/project/fundinginfo/edit/retrieve','fundingInfoController@retrieveValuesToEdit');
//edit the values on click button save
Route::get('/project/fundinginfo/edit','fundingInfoController@editFundingInfo');

//add funding expenditure for a project
Route::get('/project/fundinginfo/expenditure/new','fundingInfoController@insertFundingExpenditure');


//retrieve funding expenditure for a project
Route::get('/project/fundinginfo/expenditure/values','fundingInfoController@expenditureValues');
//edit funding expenditure for a project
Route::get('/project/fundinginfo/expenditure/edit','fundingInfoController@editFundingExpenditure');


//add project lead the value added should exist in the project lead id numbers
Route::get('/project/lead/new','projectController@addProjectLead');


//add partnerships to a paroject is it exists
Route::post('/project/partnership/new','PartnershipsController@addNewPartnership');

/** add new upcoming */
Route::post('/project/upcoming/new','UpcomingController@addNewUpcoming');
Route::get('/project/upcoming/retrieve','UpcomingController@retrieveUpcoming');


/** add new upcoming comment */
Route::get('/project/upcoming/comment/new','UpcomingController@addCommentUpcoming');

/**
funding application
*/
/*add a new grand application*/
Route::get('/project/grand/application/new','FundingApplicationController@newFundingApplication');

//add project proposal
Route::get('/project/grand/application/proposal','FundingApplicationController@fundingProposal');

//add project leaders
Route::get('/project/grand/application/projectleads','FundingApplicationController@projectLead');

//add project lead's motivation
Route::get('/project/grand/application/projectlead/motivation','FundingApplicationController@projectLeadMotivation');

//upload timeline and budget to the server
Route::post('/poject/grand/application/timelinebudget/upload','FundingApplicationController@uploadProjectTimeLineBudget');

/**role*/
Route::post('/role/save','EntrustController@role');
Route::post('/permission/save','EntrustController@permission');
Route::post('/attachrole/new','EntrustController@attachRole');

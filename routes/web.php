<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('api')->get('/', function () {
	return view('/API/dashboard');
});
Auth::routes();
Route::name('dashboard')->get('/dashboard', 'Phase2Controller@index');


Route::name('manageUsers')->get('/manageusers/','Phase2Controller@manageUsers');
     //view user details
Route::get('/manageusers/viewuser/{userId}','Phase2Controller@viewUser');
     //add user role
Route::get('/manageusers/edit/{userId}','Phase2Controller@editUser');
/** new upcoming view*/
Route::get('/upcoming/new/{projectId}','UpcomingController@newUpcoming');
Route::name('upcoming')->get('/project/upcoming','HomeController@displayUpcomingApi');
Route::name('upcomingComment')->get('/project/upcoming/comment','HomeController@upcomingComment');

//manage fund applications
Route::name('manageFundApplications')->get('/managefundapplications/','Phase2Controller@manageFunds');
/**milestone view */
Route::get('/milestone/newMilestone/{projectId}', 'MilestonesController@newMilestone');  

Route::name('milestoneComment')->get('/project/milestone/', 'HomeController@milestoneComment'); 
/** new grant view */
Route::get('/grant/newGrant/{projectId}','fundingInfoController@newGrant');
Route::get('/verifyemail/{token}','Auth\RegisterController@verify')->where('token','(.*)');
Route::get('/Test/PHP','projectRetriveController@test');

//Route::get('/home', 'HomeController@index');
/**add new project view */
Route::name('newProject')->get('/project/new','projectController@newProject');

/** navigation page for every page */
Route::get('project/navigate/project/{projectName}','projectController@navigate');

/**add a role */
Route::name('role')->get('/role/new','EntrustController@newRole');

Route::name('permission')->get('/permission/new','EntrustController@newPermission');


/** new event view */
//Route::get('/event/newEvent/{projectName}','projectController@newEvent')->name('event');



/** new impact view */
Route::get('/impact/newImpact/{projectName}','projectController@newImpact')->name('impact');



/** new target view */
Route::get('/target/newTarget/{projectName}','projectController@newTarget')->name('target');

/** new lessons view */
Route::get('/lesson/newLesson/{projectName}','projectController@newLesson')->name('lesson');

/** new target track */
Route::get('/target/population/track/{projectId}','statisticsController@addPopTrack');

/** add subsequent values target track */
Route::get('/target/population/track/subsequent/{projectId}','statisticsController@editPopulationTrackView');


/** new volunteer track */
Route::get('/volunteer/population/track/{projectId}','statisticsController@addVolTrack');

/** new volunteer track */
Route::get('/volunteer/population/track/subsequent/{projectId}','statisticsController@editVolunteerTrackView');

Route::name('fRational')->get('/funding/rational/{projectName}','projectController@addNewFundingRational');




/** display the API view project adpi docs */
Route::name('apiProject')->get('/api/project', 'HomeController@project');
Route::get('/project/milestone/', 'MilestonesController@displayMilestoneApi'); 
/** display the API view tier api docs */
Route::name('apiTier')->get('/api/project/tier', 'HomeController@tier');


/** display the API view project descriptions api docs */
Route::name('apiDescription')->get('/api/project/descriptions', 'HomeController@projectDescriptions');

/** display the API view project grand info api docs */
Route::name('apiGrand')->get('/api/project/grand', 'HomeController@grand');


/** display the API view individual project  api docs */
Route::name('apiIndividual')->get('/api/project/individual', 'HomeController@individual');


/** display the API view project population info api docs */
Route::name('impactPopulation')->get('/api/project/impactpopulation', 'HomeController@population');

Route::name('impactSector')->get('/api/project/impactsector', 'HomeController@impactSectorView');


/** display the API view project volunteers  api docs */
Route::name('statisticsTrack')->get('/api/project/statistics/track', 'HomeController@statisticsTrack');

/** display the API view project fund application api doc */
Route::name('fundApplication')->get('/api/fund/application/', 'HomeController@fundApplication');

/** display the project registration page */
Route::name('grandApllication')->get('/projects/fund/application/', 'GrandApplicationController@grandApplication');
Route::name('partnership')->get('/project/partnership/{projectId}','PartnershipsController@getPartnershipView');


/** display the project registration page */
Route::name('startApplying')->get('/projects/fund/application/new', 'GrandApplicationController@projectBrief');

/** display the project registration page */
Route::name('projectLead')->get('/projects/fund/application/projectLeader', 'GrandApplicationController@projectLead');


Route::name('pMotivation')->get('/projects/fund/application/motivation', 'GrandApplicationController@pMotivation');


Route::name('timelineBudget')->get('/projects/fund/application/timelineandbudget', 'GrandApplicationController@timelineBudget');

Route::name('download')->get('/projects/fund/application/timelineandbudget/download','FundingApplicationController@downloadBudgetTimeline');


Route::name('recommendation')->get('/projects/fund/application/timelineandbudget/recommendation','GrandApplicationController@recommendation');
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

Route::name('dashboard')->get('/', function () {
	return view('/API/dashboard');
});


Auth::routes();
Route::get('/Test/PHP','projectRetriveController@test');

//Route::get('/home', 'HomeController@index');
/**add new project view */
Route::get('/project/new','projectController@newProject');

/** navigation page for every page */
Route::get('project/navigate/project/{projectName}','projectController@navigate');
/**milestone view */
Route::get('/milestone/newMilestone/{projectName}', 'projectController@newMilestone')->name('Milestone');  

/** new event view */
Route::get('/event/newEvent/{projectName}','projectController@newEvent')->name('event');

/** new upcoming view*/
Route::get('/upcoming/new/{projectName}','projectController@newUpcoming')->name('upcoming');

/** new impact view */
Route::get('/impact/newImpact/{projectName}','projectController@newImpact')->name('impact');

/** new grant view */
Route::get('/grant/newGrant/{projectName}','projectController@newGrant')->name('grant');

/** new target view */
Route::get('/target/newTarget/{projectName}','projectController@newTarget')->name('target');

/** new lessons view */
Route::get('/lesson/newLesson/{projectName}','projectController@newLesson')->name('lesson');

/** new target track */
Route::get('/target/population/track/{projectName}','projectController@addPopTrack')->name('popTrack');

/** new volunteer track */
Route::get('/volunteer/population/track/{projectName}','projectController@addVolTrack')->name('volTrack');

Route::name('fRational')->get('/funding/rational/{projectName}','projectController@addNewFundingRational');

/** display the API view admin page */
Route::name('admin')->get('/admin', 'Phase2Controller@index');


/** display the API view project adpi docs */
Route::name('apiProject')->get('/api/project', 'HomeController@project');

/** display the API view tier api docs */
Route::name('apiTier')->get('/api/project/tier', 'HomeController@tier');


/** display the API view project descriptions api docs */
Route::name('apiDescription')->get('/api/project/descriptions', 'HomeController@projectDescriptions');

/** display the API view project grand info api docs */
Route::name('apiGrand')->get('/api/project/grand', 'HomeController@grand');


/** display the API view individual project  api docs */
Route::name('apiIndividual')->get('/api/project/individual', 'HomeController@individual');


/** display the API view project population info api docs */
Route::name('populationTrack')->get('/api/project/track/population', 'HomeController@population');


/** display the API view project volunteers  api docs */
Route::name('volunteersTrack')->get('/api/project/track/volunteers', 'HomeController@volunteer');

/** display the API view project fund application api doc */
Route::name('fundApplication')->get('/api/fund/application/', 'HomeController@fundApplication');

/** display the project registration page */
Route::name('grandApllication')->get('/projects/fund/application/', 'GrandApplicationController@grandApplication');


/** display the project registration page */
Route::name('startApplying')->get('/projects/fund/application/new', 'HomeController@projectBrief');

/** display the project registration page */
Route::name('projectLead')->get('/projects/fund/application/projectLeader', 'GrandApplicationController@projectLead');


Route::name('pMotivation')->get('/projects/fund/application/motivation', 'GrandApplicationController@pMotivation');


Route::name('timelineBudget')->get('/projects/fund/application/timelineandbudget', 'GrandApplicationController@timelineBudget');

Route::name('download')->get('/projects/fund/application/timelineandbudget/download','FundingApplicationController@downloadBudgetTimeline');


Route::name('recommendation')->get('/projects/fund/application/timelineandbudget/recommendation','GrandApplicationController@recommendation');
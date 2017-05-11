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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/Test/PHP','projectRetriveController@test');

Route::get('/home', 'HomeController@index');
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




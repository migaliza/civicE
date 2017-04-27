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
Route::get('/Projects/pDescription', 'projectRetriveController@projectNameDescription');

//list location funding data of the project
Route::get('projects/funding/{projectName}','projectRetriveController@projectFunding');

//list all project data
Route::get('Projects','');

//create a new project
Route::Post('Projects/Create');

//create a new sentiment analysis
Route::Post('Projects/Sentiment');

//retrieve project by name
Route::get('Project/{ProjectName}');



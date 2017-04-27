<?php


use Illuminate\Support\Facades\Schema;
//use Illuminate\Database\Schema\Blueprint;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{

    /**
    *the name of the database connection to use
    * @var string
    */

    /**

     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $collection) {
            $collection->index('project_name');
            $collection->string('Funding_Cycle');
            $collection->string('tier');
            $collection->string('location');
            $collection->string('longitude');
            $collection->string('latitude');
            $collection->string('Impact_sectors');
            $collection->string('brief_description');
            $collection->string('target_population');
            $collection->string('grant_amount');
            $collection->string('commencement_date');
            $collection->string('completion_date');
            $collection->string('status');
            $collection->string('primary_activity');
            $collection->string('milestone');
            $collection->string('events');
            $collection->string('partnerships');
            $collection->string('outlook');
            //$collection->unique('')
            //$collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}

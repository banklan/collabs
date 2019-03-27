<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            // $table->integer('type')->after('id')->unsigned()->nullable();
            // $table->integer('user_id')->after('type')->unsigned()->nullable();
            // $table->integer('project_category_id')->after('user_id')->unsigned()->nullable();
            // $table->string('benef')->after('body')->nullable();
            // $table->string('campaign_goal')->after('benef')->nullable();
            // $table->string('raised')->after('campaign_goal')->nullable();
            // $table->date('expiry')->after('raised')->nullable();
            // $table->string('file')->after('expiry')->nullable();

            // $table->foreign('user_id')->references('id')->on('users');  
            // $table->foreign('project_category_id')->references('id')->on('project_categories');  
            // $table->foreign('project_type_id')->references('id')->on('project_types');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}

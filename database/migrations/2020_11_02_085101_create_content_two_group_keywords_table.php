<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTwoGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_two_group_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('add_about');
            $table->string('tab_name');
            $table->string('edit_about');
            $table->string('work_process');
            $table->string('add_work_process');
            $table->string('edit_work_process');
            $table->string('industries');
            $table->string('add_industry');
            $table->string('link');
            $table->string('edit_industry');
            $table->string('skills');
            $table->string('add_skill');
            $table->string('percent_rate');
            $table->string('edit_skill');
            $table->string('testimonials');
            $table->string('name');
            $table->string('job');
            $table->string('star');
            $table->string('select_your_option');
            $table->string('enable');
            $table->string('disable');
            $table->string('edit_testimonial');
            $table->string('counters');
            $table->string('add_counter');
            $table->string('timer');
            $table->string('edit_counter');
            $table->string('sponsors');
            $table->string('add_sponsor');
            $table->string('edit_sponsor');
            $table->string('blogs');
            $table->string('categories');
            $table->string('add_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_two_group_keywords');
    }
}

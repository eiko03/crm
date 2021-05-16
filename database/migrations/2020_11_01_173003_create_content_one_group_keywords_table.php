<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentOneGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_one_group_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('dashboard');
            $table->string('home');
            $table->string('fixed_content');
            $table->string('title');
            $table->string('desc');
            $table->string('btn_name');
            $table->string('btn_link');
            $table->string('submit');
            $table->string('solutions');
            $table->string('section_title_and_desc');
            $table->string('top_title');
            $table->string('add_solution');
            $table->string('add_new');
            $table->string('icon');
            $table->string('order');
            $table->string('action');
            $table->string('edit_solution');
            $table->string('about');
            $table->string('video_link');
            $table->string('image');
            $table->string('size');
            $table->text('recommended_size');
            $table->string('created_successfully');
            $table->string('updated_successfully');
            $table->string('deleted_successfully');
            $table->string('current_image');
            $table->string('not_yet_created');
            $table->string('delete');
            $table->string('close');
            $table->string('you_wont_be_able_to_revert_this');
            $table->string('cancel');
            $table->string('yes_delete_it');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_one_group_keywords');
    }
}

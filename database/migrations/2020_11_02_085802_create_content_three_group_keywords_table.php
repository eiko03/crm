<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentThreeGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_three_group_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('edit_category');
            $table->string('category_name');
            $table->string('status');
            $table->string('add_blog');
            $table->string('edit_blog');
            $table->string('short_desc');
            $table->string('tag');
            $table->string('separate_with_commas');
            $table->string('author');
            $table->string('category');
            $table->string('post_date');
            $table->string('view');
            $table->string('works');
            $table->string('add_work');
            $table->string('results');
            $table->string('optional_features');
            $table->string('items');
            $table->string('steps');
            $table->string('edit_work');
            $table->string('work_items');
            $table->string('edit_work_item');
            $table->string('work_steps');
            $table->string('add_work_step');
            $table->string('edit_work_step');
            $table->string('company');
            $table->string('about_company');
            $table->string('experience');
            $table->string('experience_desc');
            $table->string('why_choose');
            $table->string('add_why_choose');
            $table->string('edit_why_choose');
            $table->string('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_three_group_keywords');
    }
}

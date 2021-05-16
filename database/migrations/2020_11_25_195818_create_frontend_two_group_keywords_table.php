<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendTwoGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_two_group_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('tags');
            $table->string('leave_a_reply');
            $table->string('name');
            $table->string('email');
            $table->string('your_comment');
            $table->string('post_comments');
            $table->string('categories');
            $table->string('your_name');
            $table->string('enter_name_here');
            $table->string('email_address');
            $table->string('subject');
            $table->string('message');
            $table->string('message_goes_here');
            $table->string('send_your_message');
            $table->string('read_more');
            $table->string('meet_all_members');
            $table->string('author');
            $table->string('posted_on');
            $table->string('posted_comments');
            $table->string('prev_post');
            $table->string('next_post');
            $table->string('contact');
            $table->string('frequently_asked_questions');
            $table->string('processing_system');
            $table->string('step');
            $table->string('results');
            $table->string('prev_work');
            $table->string('next_work');
            $table->string('all_case_studies');
            $table->string('view');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_two_group_keywords');
    }
}

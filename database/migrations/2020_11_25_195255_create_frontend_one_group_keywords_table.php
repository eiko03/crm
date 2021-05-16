<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendOneGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_one_group_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('home');
            $table->string('company');
            $table->string('about_company');
            $table->string('meet_our_team');
            $table->string('contact_us');
            $table->string('works');
            $table->string('blogs');
            $table->string('pages');
            $table->string('gallery');
            $table->string('team');
            $table->string('faqs');
            $table->string('start_your_project_today');
            $table->string('search');
            $table->string('search_here');
            $table->string('search_now');
            $table->string('close');
            $table->string('get_in_touch');
            $table->string('send_your_review');
            $table->string('contact_info');
            $table->string('useful_links');
            $table->string('office_location');
            $table->string('quick_contact');
            $table->string('your_message_has_been_delivered');
            $table->string('your_comment_is_pending_approval');
            $table->string('updating');
            $table->string('all');
            $table->string('by_admin');
            $table->string('comments');
            $table->string('search_results');
            $table->string('nothing_found');
            $table->string('keyword');
            $table->string('popular_post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend_one_group_keywords');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentSixGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_six_group_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('for_frontend');
            $table->string('content_group');
            $table->string('hide');
            $table->string('show');
            $table->string('display_dropdown');
            $table->string('default_site_language');
            $table->string('please_try_again');
            $table->string('you_are_not_authorized');
            $table->string('comment');
            $table->string('comments');
            $table->string('approval_status');
            $table->string('mark_all_as_approval');
            $table->string('read');
            $table->string('unread');
            $table->string('profile');
            $table->string('change_password');
            $table->string('current_password');
            $table->string('new_password');
            $table->string('confirm_password');
            $table->string('pending_approval');
            $table->string('approval');
            $table->string('data_language');
            $table->string('which_language');
            $table->string('reminding');
            $table->string('notifications');
            $table->string('logout');
            $table->string('optimizer');
            $table->string('settings');
            $table->string('add_testimonial');
            $table->string('add_work_item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_six_group_keywords');
    }
}

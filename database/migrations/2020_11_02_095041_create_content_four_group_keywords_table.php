<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentFourGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_four_group_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('add_team');
            $table->string('edit_team');
            $table->string('faqs');
            $table->string('question');
            $table->string('answer');
            $table->string('add_faq');
            $table->string('edit_faq');
            $table->string('galleries');
            $table->string('add_gallery');
            $table->string('edit_gallery');
            $table->string('pages');
            $table->string('add_page');
            $table->string('edit_page');
            $table->string('display_footer_menu');
            $table->string('other');
            $table->string('yes');
            $table->string('no');
            $table->string('copy_link');
            $table->string('copied_text');
            $table->string('map_iframe');
            $table->text('map_iframe_desc_placeholder');
            $table->string('contact');
            $table->string('contact_info');
            $table->string('add_contact');
            $table->string('edit_contact');
            $table->string('socials');
            $table->string('add_social');
            $table->string('edit_social');
            $table->string('email');
            $table->string('subject');
            $table->string('message');
            $table->string('read_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_four_group_keywords');
    }
}

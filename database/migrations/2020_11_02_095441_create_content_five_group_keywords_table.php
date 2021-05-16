<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentFiveGroupKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_five_group_keywords', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('mark_all_as_read');
            $table->string('mark');
            $table->string('messages');
            $table->string('site_info');
            $table->string('copyright');
            $table->string('address');
            $table->string('address_map_link');
            $table->string('phone');
            $table->string('site_images');
            $table->string('favicon');
            $table->string('admin_logo');
            $table->string('admin_small_logo_image');
            $table->string('site_white_logo_image');
            $table->string('site_colored_logo_image');
            $table->string('site_small_logo_image');
            $table->string('site_footer_logo_image');
            $table->string('google_analytic');
            $table->string('breadcrumb');
            $table->string('sections');
            $table->string('seo');
            $table->string('site_name');
            $table->string('site_desc');
            $table->string('site_keywords');
            $table->string('please_create_a_category');
            $table->string('languages');
            $table->string('add_language');
            $table->string('edit_language');
            $table->string('language_name');
            $table->string('language_code');
            $table->string('direction');
            $table->string('keywords');
            $table->string('for_admin_panel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_five_group_keywords');
    }
}

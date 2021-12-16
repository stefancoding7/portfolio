<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            
            $table->boolean('site_switch')->nullable();
            $table->string('avatar')->nullable();
            $table->string('logo')->nullable();
            $table->string('short_info')->nullable();
            $table->string('about_me_image')->nullable();
            $table->string('email')->nullable();
            $table->mediumText('about_me')->nullable();
            $table->mediumText('site_name')->nullable();
            $table->mediumText('resume')->nullable();
            $table->bigInteger('show_projects')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}

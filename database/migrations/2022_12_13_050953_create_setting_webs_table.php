<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_webs', function (Blueprint $table) {
            $table->id();
            $table->text('about');
            $table->text('pustaka');
            $table->text('artikel');
            $table->text('akademi');
            $table->text('join');
            $table->text('kontak');
            $table->string('logo_dark');
            $table->string('logo_light');
            $table->boolean('is_aktif');
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
        Schema::dropIfExists('setting_webs');
    }
};

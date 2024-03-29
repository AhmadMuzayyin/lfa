<?php

use App\Models\CourseCategory;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CourseCategory::class)->constrained();
            $table->string('title');
            $table->string('speaker');
            $table->bigInteger('telepon_speaker');
            $table->string('foto_speaker');
            $table->string('photo')->nullable();
            $table->enum('sistem', ['Online', 'Offline']);
            $table->bigInteger('price')->nullable();
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
        Schema::dropIfExists('courses');
    }
};

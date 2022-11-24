<?php

use App\Models\Course;
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
        Schema::create('course_timetables', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Course::class)->constrained();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('image');
            $table->text('descrption');
            $table->boolean('status'); //true (selesai dilaksanakan) false (belum dilaksanakan)
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
        Schema::dropIfExists('course_timetables');
    }
};

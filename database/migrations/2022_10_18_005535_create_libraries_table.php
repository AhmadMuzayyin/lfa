<?php

use App\Models\User;
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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('title');
            $table->string('publisher');
            $table->text('description');
            $table->enum('type', ['Selebaran', 'Buletin', 'Buku']);
            $table->string('image');
            $table->year('published');
            $table->bigInteger('price')->nullable();
            $table->boolean('status'); //true (stok ada) false (stok kosong)
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
        Schema::dropIfExists('libraries');
    }
};

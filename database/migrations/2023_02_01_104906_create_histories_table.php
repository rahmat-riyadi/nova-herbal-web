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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patients_id');
            $table->string('name');
            $table->foreign('patients_id')->references('id')->on('patients')->delete('NO ACTION');
            $table->dateTime('coming_time')->nullable();
            $table->string('medicine');
            $table->string('capsul_color')->nullable();
            $table->string('price', 10, 10);
            $table->string('status')->default('Menunggu');
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
        Schema::dropIfExists('histories');
    }
};

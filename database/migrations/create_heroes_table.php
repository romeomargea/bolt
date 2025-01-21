<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('primary_button');
            $table->string('secondary_button');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('heroes');
    }
};
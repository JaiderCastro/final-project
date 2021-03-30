<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('code');
            $table->bigInteger('transition_code');
            $table->string('name');
            $table->string('packing');
            $table->bigInteger('quantity');
            $table->string('presentation');
            $table->date('expiration_date');
            $table->string('way_administration');
            $table->string('storage');
            $table->date('entry_date');
            $table->string('specifications');
            $table->bigInteger('price');
            $table->string('brand');
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
        Schema::dropIfExists('medicines');
    }
}

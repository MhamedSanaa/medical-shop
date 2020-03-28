<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedecinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('generic',100);
            $table->bigInteger('typeid');
            $table->string('status',100);
            $table->double('price', 6, 3);
            $table->string('status');
            $table->text('description');
            $table->foreign('typeid')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medecines');
    }
}
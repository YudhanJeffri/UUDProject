<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayats', function (Blueprint $table) {
            $table->id();
            $table->string('pasal')->index();
            $table->foreign('pasal')->references('pasal')->on('pasals');
            $table->integer('ayat');
            $table->text('bunyi');
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
        Schema::dropIfExists('ayats');
    }
}

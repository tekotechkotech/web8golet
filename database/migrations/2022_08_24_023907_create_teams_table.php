<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();


            $table->string('nama');
            $table->string('jabatan');
            $table->string('tulisan');

            
            $table->string('twit')->nullable();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('linkdin')->nullable();

            $table->string('img');

            $table->softDeletes();
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
        Schema::dropIfExists('teams');
    }
}

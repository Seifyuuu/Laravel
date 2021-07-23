<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEleveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleve', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->string("prename", 40);
            $table->string("e-mail", 50)->nullable();
            $table->string("adresse", 200);
            $table->date("date");
            $table->ipAddress("externe");
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
        Schema::dropIfExists('eleve');
    }
}

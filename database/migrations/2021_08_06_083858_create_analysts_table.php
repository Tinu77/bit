<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalystsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysts', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('image_id')->nullable()->constrained();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('og_number');
            $table->string('whatsapp_number');
            $table->string('gender');
            $table->date('dob');
            $table->string('grade_level');
            $table->string('grade_step');
            $table->string('department');
            $table->string('cadre');
            $table->string('competence_level');
            $table->string('area_of_interests');
            $table->string('unit');
            $table->string('rank');
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
        Schema::dropIfExists('analysts');
    }
}

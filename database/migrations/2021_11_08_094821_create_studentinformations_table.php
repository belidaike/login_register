<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentinformations', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Age');
            $table->integer('ContactNO');
            $table->string('Address');
            $table->string('Gender');
            $table->string('Citizenship');
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
        Schema::dropIfExists('studentinformations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmittablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submittables', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('instructor_id');
            $table->string('submittable_name', 50);
            $table->string('submittable_code', 50);
            $table->json('submittable_q');
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
        Schema::dropIfExists('submittables');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_batches', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('batch_code');
            $table->bigInteger('instructor_id');
            $table->decimal('course_price', 18,2);
            $table->longText('course_information');
            $table->json('course_lessons');
            $table->json('course_submittables');
            $table->json('grading_scheme');
            $table->dateTime('admission_start_date');
            $table->dateTime('admission_end_date');
            $table->dateTime('start_date');
            $table->dateTime('end_date');

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
        Schema::dropIfExists('courses_batches');
    }
}

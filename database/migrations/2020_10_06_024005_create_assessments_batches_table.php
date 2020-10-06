<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments_batches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('partner_id');
            $table->string('batch_code', 50);
            $table->unsignedBigInteger('instructor_id');
            $table->decimal('assessment_price', 18,2);
            $table->longText('assessment_information');
            $table->string('assessment_location', 50);
            $table->json('assessment_student_grades');
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
        Schema::dropIfExists('assessments_batches');
    }
}

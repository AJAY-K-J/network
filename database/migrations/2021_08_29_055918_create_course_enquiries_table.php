<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('enquirer_name');
            $table->string('enquirer_email');
            $table->string('enquirer_mobile');
            $table->string('enquirer_dob');
            $table->string('enquirer_district');
            $table->string('enquirer_state');
            $table->string('enquirer_street');
            $table->string('enquirer_pin');
            $table->string('enquirer_education');
            $table->string('enquirer_preferred_course');
            $table->string('enquirer_preferred_course_time');
            $table->text('enquirer_remarks');
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
        Schema::dropIfExists('course_enquiries');
    }
}

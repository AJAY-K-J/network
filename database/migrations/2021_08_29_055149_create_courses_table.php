<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_short_name');
            $table->string('course_code');
            $table->string('course_category_id');
            $table->text('small_description');
            $table->text('course_description');
            $table->string('course_duration');
            $table->integer('course_fee');
            $table->integer('course_certification_fee');
            $table->string('course_certification_code');
            $table->string('course_image');

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
        Schema::dropIfExists('courses');
    }
}

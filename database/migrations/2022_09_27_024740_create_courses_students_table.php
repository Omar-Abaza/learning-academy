<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId("course_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("student_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->enum("status",["appending","approve","reject"])->default("appending");
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
        Schema::dropIfExists('courses_students');
    }
};

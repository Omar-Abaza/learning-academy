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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("trainer_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->string("name",100);
            $table->string("small_desc",100);
            $table->text("desc");
            $table->integer("price");
            $table->string("image");
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
};

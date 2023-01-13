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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('cheapter_id');
            $table->unsignedBigInteger('priority')->default(10);
            $table->string('banner')->nullable();
            $table->boolean('is_free')->default(false);
            $table->unsignedFloat('price',8,2)->default(0);
            $table->unsignedFloat('offer_price',8,2)->default(0);
            $table->text('description')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('status')->default(true);

            $table->boolean('is_live')->default(false);
            $table->unsignedInteger('value')->default(0);
            $table->enum('type',['video','text','assignment'])->default('video');
            $table->enum('label',['beginner','intermediate','advanced'])->default('beginner');

            $table->string('video_url')->nullable();
            $table->string('embedded_url')->nullable();
            $table->unsignedInteger('total_view')->default(0);

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();


            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('cheapter_id')->references('id')->on('cheapters');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};

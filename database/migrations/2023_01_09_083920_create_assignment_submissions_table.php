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
        Schema::create('assignment_submissions', function (Blueprint $table) {
            $table->id();

            $table->unsignedFloat('value')->default(0);
            $table->text('description')->nullable('');
            $table->unsignedFloat('result')->default(0);
            $table->foreignId('assignment_id')->default(0);
            $table->foreignId('user_id')->default(0);
            $table->text('review_description')->nullable();
            $table->unsignedBigInteger('reviewed_by')->nullable();


            $table->foreign('reviewed_by')->references('id')->on('users');
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
        Schema::dropIfExists('assignment_submissions');
    }
};

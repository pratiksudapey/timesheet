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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pan_no');
            $table->string('model_no');
            $table->string('order_number');
            $table->string('order_date')->nullable();
            $table->string('quantity')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};

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
        Schema::create('salarybases', function (Blueprint $table) {
            $table->id();
            $table->string('base_titile');
            $table->enum('base_type',['monthly','weekly','daily','hourly']);
            $table->bigInteger('basic_salary');
            $table->bigInteger('currency');
            $table->bigInteger('hourly_overtime_cost');
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
        Schema::dropIfExists('salarybases');
    }
};

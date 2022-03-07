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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('serial_no');
            $table->bigInteger('employees_id');
            $table->date('from_date');
            $table->date('upto_date');
            $table->bigInteger('year');
            $table->bigInteger('month');
            $table->bigInteger('total_hours');
            $table->bigInteger('total_overtime');
            $table->bigInteger('total_overtime_cost');
            $table->bigInteger('total_bonus_cost');
            $table->bigInteger('deductions_cost');
            $table->bigInteger('tax');
            $table->bigInteger('total_amount');
            $table->boolean('is_paid');
            $table->timestamps();
            $table->$foreign('employees_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};

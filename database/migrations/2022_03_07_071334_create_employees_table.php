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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('badge_no');
            $table->string('name');
            $table->string('lastname');
            $table->int('phone');
            $table->string('email');
            $table->string('photo');
            $table->string('company_email');
            $table->int('whatsapp');
            $table->string('gender');
            $table->int('salarybase_id');
            $table->date('birth_date');
            $table->int('present_address_id');
            $table->int('permanent_address_id');
            $table->enum('employee_level', ['intern', 'starter', 'junier','senior']);
            $table->enum('status', ['active', 'unactive']);
            $table->int('department_id');
            $table->int('designation');
            $table->foreign('salarybase_id')->references('id')->on('salarybases')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('employees');
    }
};

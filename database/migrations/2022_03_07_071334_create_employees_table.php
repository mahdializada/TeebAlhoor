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
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('photo');
            $table->string('company_email');
            $table->bigInteger('whatsapp');
            $table->string('gender');
            $table->bigInteger('salarybase_id')->unsigned();
            $table->date('birth_date');
            $table->bigInteger('present_address_id')->unsigned();
            $table->bigInteger('permanent_address_id')->unsigned();
            $table->enum('employee_level', ['intern', 'starter', 'junier','senior']);
            $table->enum('status', ['active', 'unactive']);
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('designation');
            $table->foreign('salarybase_id')->references('id')->on('salarybases')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('department_id')->references('id')->on('departements')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('present_address_id')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('permanent_address_id')->references('id')->on('addresses')->onDelete('cascade')->onUpdate('cascade');
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

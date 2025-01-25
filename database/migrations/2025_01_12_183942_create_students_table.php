<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45)->nullable()->default('nombre');
            $table->string('last_name', 45)->nullable()->default('apellido paterno');
            $table->string('second_last_name', 45)->nullable()->default('apellido materno');
            $table->date('date_of_birth')->nullable();            
            $table->String('email',50)->nullable()->default('email@gmail.com');
            $table->bigInteger('phone')->nullable()->default(123456789);
            $table->String('state',40)->nullable()->default('Veracruz');
            $table->String('town',40)->nullable()->default('Gtz. Zamora');
            $table->foreignId('tutor_id')->nullable();

            $table->foreign('tutor_id')->references('id')->on('tutors')->
            onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

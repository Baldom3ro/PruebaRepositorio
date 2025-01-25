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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name', 45)->nullable()->default('materia');
            $table->string('description',100)->nullable()->default('descripcion');
            $table->foreignId('teacher_id')->nullable();

            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teachers')->
            onDelete('cascade')-> onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};

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
        //
        schema::create('students', function (Blueprint $table){
            $table->id();
            $table->string('Firstname');
            $table->string('Middlename');
            $table->string('Lastname');
            $table->string('Gender');
            $table->string('Birthday');
            $table->string('Email')->unique();
            $table->string('Address');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

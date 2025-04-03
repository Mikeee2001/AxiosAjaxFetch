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
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('age');
            $table->enum('gender',['male','female','others'])->default('others');
            $table->timestamps();
        });

        DB::table('student_details')->insert([
            [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'age' => 20,
            'gender' => 'male',
            ],
            [
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'age' => 25,
            'gender' => 'female'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_details');
    }
};

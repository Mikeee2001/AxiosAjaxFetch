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
        Schema::create('grade', function (Blueprint $table) {
            $table->id();
            $table->decimal('FinalGrade',5,2);
            $table->decimal('MidtermGrade',5,2);
            $table->timestamps();
            $table->unsignedBigInteger('student_id');

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
        DB::table('grade')->insert([
            [
                'FinalGrade' => 1.70,
                'MidtermGrade' => 1.0,
                'student_id' => 1,
            ],
            [
                'FinalGrade' => 1.23,
                'MidtermGrade' => 3.0,
                'student_id' => 2,
            ],
            [
                'FinalGrade' => 1.5,
                'MidtermGrade' => 2.0,
                'student_id' => 3,
            ],
            [
                'FinalGrade' => 1.8,
                'MidtermGrade' => 5.0,
                'student_id' => 4,
            ],
            [
                'FinalGrade' => 1.9,
                'MidtermGrade' => 3.0,
                'student_id' => 5,
            ],
            [
                'FinalGrade' => 2.70,
                'MidtermGrade' => 1.8,
                'student_id' => 6,
            ],
            [
                'FinalGrade' => 3.70,
                'MidtermGrade' => 1.1,
                'student_id' => 7,
            ],
            [
                'FinalGrade' => 4.70,
                'MidtermGrade' => 1.7,
                'student_id' => 8,
            ],
            [
                'FinalGrade' => 2.13,
                'MidtermGrade' => 1.2,
                'student_id' => 9,
            ],
            [
                'FinalGrade' => 2.3,
                'MidtermGrade' => 1.50,
                'student_id' => 10,
            ],
            [
                'FinalGrade' => 2.8,
                'MidtermGrade' => 1.31,
                'student_id' => 11,
            ],
            [
                'FinalGrade' => 2.3,
                'MidtermGrade' => 1.8,
                'student_id' => 12,
            ],
            [
                'FinalGrade' => 2.8,
                'MidtermGrade' => 1.9,
                'student_id' => 13,
            ],
            [
                'FinalGrade' => 2.6,
                'MidtermGrade' => 1.31,
                'student_id' => 14,
            ],
            [
                'FinalGrade' => 1.9,
                'MidtermGrade' => 2.5,
                'student_id' => 15,
            ],
            [
                'FinalGrade' => 2.3,
                'MidtermGrade' => 2.5,
                'student_id' => 16,
            ],
            [
                'FinalGrade' => 2.0,
                'MidtermGrade' => 2.9,
                'student_id' => 17,
            ],
            [
                'FinalGrade' => 2.3,
                'MidtermGrade' => 2.31,
                'student_id' => 18,
            ],
            [
                'FinalGrade' => 1.3,
                'MidtermGrade' => 2.31,
                'student_id' => 19,
            ],
            [
                'FinalGrade' => 2.3,
                'MidtermGrade' => 1.31,
                'student_id' => 20,
            ],

            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade');
    }
};

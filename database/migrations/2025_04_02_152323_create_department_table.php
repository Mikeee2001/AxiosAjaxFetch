<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->enum('departments',['BSIT','BSBA','EDUCATION']);
            $table->timestamps();

            $table->unsignedBigInteger('student_id');

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
        DB::table('department')->insert([
            [
                'departments' => 'BSIT',
                'student_id' => 1,
            ],
            [
                'departments' => 'BSBA',
                'student_id' => 2,
            ],
            [
                'departments' => 'EDUCATION',
                'student_id' => 3,
            ],
            [
                'departments' => 'BSIT',
                'student_id' => 4,
            ],
            [
                'departments' => 'BSBA',
                'student_id' => 5,
            ],
            [
                'departments' => 'EDUCATION',
                'student_id' => 6,
            ],
            [
                'departments' => 'BSIT',
                'student_id' => 7,
            ],
            [
                'departments' => 'BSBA',
                'student_id' => 8,
            ],
            [
                'departments' => 'EDUCATION',
                'student_id' => 9,
            ],
            [
                'departments' => 'BSIT',
                'student_id' => 10,
            ],
            [
                'departments' => 'EDUCATION',
                'student_id' => 11,
            ],
            [
                'departments' => 'BSIT',
                'student_id' => 12,
            ],
            [
                'departments' => 'BSBA',
                'student_id' => 13,
            ],
            [
                'departments' => 'EDUCATION',
                'student_id' => 14,
            ],
            [
                'departments' => 'BSBA',
                'student_id' => 15,
            ],
            [
                'departments' => 'EDUCATION',
                'student_id' => 16,
            ],
            [
                'departments' => 'BSIT',
                'student_id' => 17,
            ],
            [
                'departments' => 'BSBA',
                'student_id' => 18,
            ],
            [
                'departments' => 'BSIT',
                'student_id' => 19,
            ],
            [
                'departments' => 'EDUCATION',
                'student_id' => 20,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department');
    }
};

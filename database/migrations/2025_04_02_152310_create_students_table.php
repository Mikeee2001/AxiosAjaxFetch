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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('id_number');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
        DB::table('students')->insert([
            [
                'id_number' => '21',
                'first_name' => 'erika',
                'middle_name' => 'mae',
                'last_name' => 'casas',
                'user_id' => 1,
            ],
            [
                'id_number' => '2',
                'first_name' => 'elijah',
                'middle_name' => 'riley',
                'last_name' => 'montefalco',
                'user_id' => 2,
            ],
            [
                'id_number' => '3',
                'firstname' => 'azrael',
                'middlename' => 'azi',
                'last_name' => 'montemayor',
                'user_id' => 3,
            ],
            [
                'id_number' => '4',
                'firstname' => 'klare',
                'middlename' => 'desteen',
                'last_name' => 'ty',
                'user_id' => 4,
            ],
            [
                'id_number' => '5',
                'firstname' => 'jack',
                'middlename' => 'jc',
                'last_name' => 'green',
                'user_id' => 5,
            ],
            [
                'id_number' => '6',
                'firstname' => 'naya',
                'middlename' => 'nya',
                'last_name' => 'dy',
                'user_id' => 6,
            ],
            [
                'id_number' => '7',
                'firstname' => 'Raj',
                'middlename' => 'rai',
                'last_name' => 'riego',
                'user_id' => 7,
            ],
            [
                'id_number' => '8',
                'firstname' => 'rafael',
                'middlename' => 'doughlas',
                'last_name' => 'pilot',
                'user_id' => 8,
            ],
            [
                'id_number' => '9',
                'firstname' => 'justin',
                'middlename' => 'tin',
                'last_name' => 'crus',
                'user_id' => 9,
            ],
            [
                'id_number' => '10',
                'firstname' => 'erin',
                'middlename' => 'eri',
                'last_name' => 'sy',
                'user_id' => 10,
            ],
            [
                'id_number' => '11',
                'firstname' => 'daisy',
                'middlename' => 'cox',
                'last_name' => 'chen',
                'user_id' => 11,
            ],
            [
                'id_number' => '12',
                'firstname' => 'belle',
                'middlename' => 'rose',
                'last_name' => 'kim',
                'user_id' => 12,
            ],
            [
                'id_number' => '13',
                'firstname' => 'king',
                'middlename' => 'wang',
                'last_name' => 'sy',
                'user_id' => 13,
            ],
            [
                'id_number' => '14',
                'firstname' => 'gail',
                'middlename' => 'gil',
                'last_name' => 'nael',
                'user_id' => 14,
            ],
            [
                'id_number' => '15',
                'firstname' => 'luna',
                'middlename' => 'na',
                'last_name' => 'wolf',
                'user_id' => 15,
            ],
            [
                'id_number' => '16',
                'firstname' => 'erin',
                'middlename' => 'eri',
                'last_name' => 'sy',
                'user_id' => 16,
            ],
            [
                'id_number' => '17',
                'firstname' => 'erin',
                'middlename' => 'eri',
                'last_name' => 'sy',
                'user_id' => 17,
            ],
            [
                'id_number' => '18',
                'firstname' => 'erin',
                'middlename' => 'eri',
                'last_name' => 'sy',
                'user_id' => 18,
            ],
            [
                'id_number' => '19',
                'firstname' => 'erin',
                'middlename' => 'eri',
                'last_name' => 'sy',
                'user_id' => 19,
            ],
            [
                'id_number' => '20',
                'firstname' => 'erin',
                'middlename' => 'eri',
                'last_name' => 'sy',
                'user_id' => 20,
            ],


        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

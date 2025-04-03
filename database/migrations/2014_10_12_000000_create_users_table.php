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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->rememberToken();
            $table->timestamps();


        });
        DB::table('users')->insert([
            [
                'name' => 'mika',
            ],
            [
                'name' => 'mavi',
            ],
            [
                'name' => 'kidlat',
            ],
            [
                'name' => 'geng',
            ],
            [
                'name' => 'yow',
            ],
            [
                'name' => 'mika',
            ],
            [
                'name' => 'junnie',
            ],
            [
                'name' => 'congtv',
            ],
            [
                'name' => 'michael',
            ],
            [
                'name' => 'mike',
            ],
            [
                'name' => 'ace',
            ],
            [
                'name' => 'azi',
            ],
            [
                'name' => 'klare',
            ],
            [
                'name' => 'dustin',
            ],
            [
                'name' => 'elijah',
            ],
            [
                'name' => 'nikki',
            ],
            [
                'name' => 'mae',
            ],
            [
                'name' => 'erika',
            ],
            [
                'name' => 'desteen',
            ],
            [
                'name' => 'azrael',
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

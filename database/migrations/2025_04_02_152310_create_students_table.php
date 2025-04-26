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
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamps();


        });
        DB::table('students')->insert([
            ['first_name' => 'Ethan', 'last_name' => 'Baker'],
            ['first_name' => 'Sophia', 'last_name' => 'White'],
            ['first_name' => 'Lucas', 'last_name' => 'Carter'],
            ['first_name' => 'Olivia', 'last_name' => 'Mitchell'],
            ['first_name' => 'Benjamin', 'last_name' => 'Reed'],
            ['first_name' => 'Charlotte', 'last_name' => 'Bell'],
            ['first_name' => 'William', 'last_name' => 'Adams'],
            ['first_name' => 'Amelia', 'last_name' => 'Ward'],
            ['first_name' => 'Henry', 'last_name' => 'Stewart'],
            [ 'first_name' => 'Ella', 'last_name' => 'Murphy'],
            [ 'first_name' => 'Daniel', 'last_name' => 'Foster'],
            [ 'first_name' => 'Lily', 'last_name' => 'Barnes'],
            [ 'first_name' => 'Jackson', 'last_name' => 'Russell'],
            [ 'first_name' => 'Scarlett', 'last_name' => 'Simmons'],
            [ 'first_name' => 'Mason', 'last_name' => 'Kelly'],
            [ 'first_name' => 'Emily', 'last_name' => 'Watson'],
            [ 'first_name' => 'Noah', 'last_name' => 'Bryant'],
            [ 'first_name' => 'Victoria', 'last_name' => 'Hayes'],
            [ 'first_name' => 'Andrew', 'last_name' => 'Gibson'],
            [ 'first_name' => 'Hannah', 'last_name' => 'Cunningham'],
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('role')->default('student'); // student, teacher, admin
        $table->string('phone')->nullable();
        $table->string('gender')->nullable();
        $table->date('dob')->nullable(); // date of birth
        $table->string('address')->nullable();
        $table->string('photo')->nullable(); // profile picture
        $table->boolean('status')->default(true); // active/inactive
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

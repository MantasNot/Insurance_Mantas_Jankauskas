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
        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(); // Adding a new nullable unsigned big integer column named 'user_id'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); // Adding a foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Dropping the foreign key constraint
            $table->dropColumn('user_id'); // Dropping the 'user_id' column
        });
    }
};

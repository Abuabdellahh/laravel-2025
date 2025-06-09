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
        Schema::table('student', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            $table->string('country')->nullable();
            
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student', function (Blueprint $table) {
            //
            $table->dropColumn('country');
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};


/**
 * Laravel Migrations Explained:
 * 
 * 1. Purpose:
 *    - Migrations are like version control for your database
 *    - They allow you to define and modify database structure using PHP code
 *    - Track database changes over time
 * 
 * 2. Key Components:
 *    - up(): Defines changes to apply to the database
 *    - down(): Defines how to reverse those changes
 *    - Schema::table(): Modifies existing tables
 *    - Blueprint: Provides methods to define columns
 * 
 * 3. Benefits:
 *    - Version control for database structure
 *    - Easy to share database changes with team
 *    - Can roll back changes if needed
 *    - Database-agnostic (works with MySQL, PostgreSQL, etc.)
 * 
 * 4. Common Operations:
 *    - Creating tables
 *    - Adding/removing columns
 *    - Creating indexes
 *    - Adding foreign keys
 *    - Modifying column types
 * 
 * 5. Best Practices:
 *    - Each migration should do one thing
 *    - Always include down() method for rollback
 *    - Use meaningful names for migrations
 *    - Test migrations in development first
 */
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

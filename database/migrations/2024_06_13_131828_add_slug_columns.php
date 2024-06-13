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
        Schema::table('posts', function($table) {
            $table->string('slug')->unique();
        });
        
        Schema::table('programs', function($table) {
            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {        
        Schema::table('programs', function($table) {
            $table->dropColumn('slug');
        });

        Schema::table('posts', function($table) {
            $table->dropColumn('slug');
        });
    }
};

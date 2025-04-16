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
        Schema::table('answers', function (Blueprint $table) {
            $table->renameColumn('tag', 'is_correct');
        });
    }
    
    public function down(): void
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->renameColumn('is_correct', 'tag');
        });
    }
    
};

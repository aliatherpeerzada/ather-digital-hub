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
        Schema::table('blogs', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id')->nullable()->after('id');
            $table->foreign('author_id')->references('id')->on('users')->nullOnDelete();
            
            $table->enum('status', ['draft', 'published'])->default('draft')->after('content');
            $table->timestamp('published_at')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropColumn(['author_id', 'status', 'published_at']);
        });
    }
};

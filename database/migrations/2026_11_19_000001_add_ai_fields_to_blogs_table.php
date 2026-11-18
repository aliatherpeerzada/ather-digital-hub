<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Marks blogs that were created through the Claude API
            $table->boolean('created_by_ai')->default(false)->after('author_id');
            // Admin who approved / published the AI blog
            $table->unsignedBigInteger('approved_by')->nullable()->after('published_at');
            $table->timestamp('approved_at')->nullable()->after('approved_by');
            $table->foreign('approved_by')->references('id')->on('users')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign(['approved_by']);
            $table->dropColumn(['created_by_ai', 'approved_by', 'approved_at']);
        });
    }
};

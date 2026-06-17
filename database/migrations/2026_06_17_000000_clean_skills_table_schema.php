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
        Schema::table('skills', function (Blueprint $table) {
            // Drop the old 'percentage' column if it exists (keeping only level)
            if (Schema::hasColumn('skills', 'percentage')) {
                $table->dropColumn('percentage');
            }

            // Ensure category and level exist
            if (!Schema::hasColumn('skills', 'category')) {
                $table->string('category')->nullable()->after('name');
            }

            if (!Schema::hasColumn('skills', 'level')) {
                $table->integer('level')->default(0)->after('category');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            // On rollback, restore the percentage column
            if (!Schema::hasColumn('skills', 'percentage')) {
                $table->integer('percentage')->default(0)->after('name');
            }
        });
    }
};

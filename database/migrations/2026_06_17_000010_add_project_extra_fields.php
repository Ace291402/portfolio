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
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'category')) {
                $table->string('category')->nullable();
            }

            if (!Schema::hasColumn('projects', 'target_date')) {
                $table->date('target_date')->nullable();
            }

            if (!Schema::hasColumn('projects', 'skills')) {
                $table->json('skills')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'skills')) {
                $table->dropColumn('skills');
            }

            if (Schema::hasColumn('projects', 'target_date')) {
                $table->dropColumn('target_date');
            }

            if (Schema::hasColumn('projects', 'category')) {
                $table->dropColumn('category');
            }
        });
    }
};

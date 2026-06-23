<?php

declare(strict_types=1);

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
        if (Schema::hasTable('sponsorships')) {
            Schema::table('sponsorships', function (Blueprint $table) {
                $table->index('is_active');
                $table->index(['start_time', 'end_time']);
            });
        }

        if (Schema::hasTable('loyalty_logs')) {
            Schema::table('loyalty_logs', function (Blueprint $table) {
                $table->index('user_id');
                $table->index('created_at');
            });
        }

        if (Schema::hasTable('activity_log')) {
            Schema::table('activity_log', function (Blueprint $table) {
                $table->index(['subject_type', 'subject_id'], 'activity_log_subject_index');
                $table->index(['causer_type', 'causer_id'], 'activity_log_causer_index');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('sponsorships')) {
            Schema::table('sponsorships', function (Blueprint $table) {
                $table->dropIndex(['is_active']);
                $table->dropIndex(['start_time', 'end_time']);
            });
        }

        if (Schema::hasTable('loyalty_logs')) {
            Schema::table('loyalty_logs', function (Blueprint $table) {
                $table->dropIndex(['user_id']);
                $table->dropIndex(['created_at']);
            });
        }

        if (Schema::hasTable('activity_log')) {
            Schema::table('activity_log', function (Blueprint $table) {
                $table->dropIndex('activity_log_subject_index');
                $table->dropIndex('activity_log_causer_index');
            });
        }
    }
};

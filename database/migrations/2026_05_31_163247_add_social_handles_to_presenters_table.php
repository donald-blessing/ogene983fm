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
        Schema::table('presenters', function (Blueprint $table) {
            $table->string('twitter_handle')->nullable()->after('slug');
            $table->string('instagram_handle')->nullable()->after('twitter_handle');
            $table->string('facebook_url')->nullable()->after('instagram_handle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('presenters', function (Blueprint $table) {
            $table->dropColumn(['twitter_handle', 'instagram_handle', 'facebook_url']);
        });
    }
};

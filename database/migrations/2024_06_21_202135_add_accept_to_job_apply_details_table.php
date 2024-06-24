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
        Schema::table('job_apply_details', function (Blueprint $table) {
            $table->boolean('accept')->default(false)->after('prefered_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_apply_details', function (Blueprint $table) {
            $table->dropColumn('accept');
        });
    }
};

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
        Schema::create('personal_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('university')->nullable();
            $table->string('graduated')->default('false')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('phones')->nullable();
            $table->string('nationality')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('cv_form')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_profiles');
    }
};

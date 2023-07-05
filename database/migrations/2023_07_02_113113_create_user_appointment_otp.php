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
        Schema::create('user_appointment_otp', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->mediumInteger('otp');
            $table->timestamp('otp_create_time');
            $table->timestamp('otp_expire_at')->nullable();
            $table->tinyInteger('otp_expire');
            $table->tinyInteger('is_verified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_appointment_otp');
    }
};

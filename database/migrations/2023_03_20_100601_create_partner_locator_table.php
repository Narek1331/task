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
        Schema::create('partner_locator', function (Blueprint $table) {
            $table->id();
            $table->string('company',255);
            $table->string('status',255);
            $table->string('logo',255);
            $table->string('address',255);
            $table->string('website',255);
            $table->string('phone',40);
            $table->text('countries_covered');
            $table->text('states_covered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_locator');
    }
};

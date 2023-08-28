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
        Schema::create('crew_members', function (Blueprint $table) {
            $table->id();
            $table->string('profile_photo')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('phone')->nullable();
            $table->string('mother')->nullable();
            $table->string('spouse')->nullable();
            $table->string('rank')->nullable();
            $table->string('src')->nullable();
            $table->string('sbook')->nullable();
            $table->date('sbook_date_issued')->nullable();
            $table->date('sbook_expiry_date')->nullable();
            $table->string('sbook_place_issued')->nullable();
            $table->string('pport')->nullable();
            $table->date('pport_date_issued')->nullable();
            $table->date('pport_expiry_date')->nullable();
            $table->string('pport_place_issued')->nullable();
            $table->date('coc_date_issued')->nullable();
            $table->date('coc_expiry_date')->nullable();
            $table->date('us_visa')->nullable();
            $table->date('yfever')->nullable();
            $table->string('status')->nullable();
            $table->enum('radio_option', ['MWE', 'ACTIVE'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crew_members');
    }
};

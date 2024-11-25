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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->string('image');
            $table->string('address');
            $table->integer('num_tickets');
            $table->integer('attendee_id');
            $table->integer('speaker_id');
            $table->integer('organiser_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

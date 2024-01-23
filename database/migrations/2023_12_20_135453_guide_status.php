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
        Schema::create('guide_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('state_guide');
            $table->string('state_gle');
            $table->string('agile1');
            $table->timestamps();
        });
    }


};

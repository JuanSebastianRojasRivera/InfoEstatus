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
        Schema::create('causal_changes', function (Blueprint $table) {
            $table->id();
            $table->string('causal_operators');
            $table->string('causal_status');
            $table->string('responsible')->nullable();
            $table->string('operator');
            $table->timestamps();
        });
    }


};

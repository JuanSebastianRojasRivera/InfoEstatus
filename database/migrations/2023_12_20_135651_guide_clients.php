<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('guide_clients', function (Blueprint $table) {
            $table->id();
            $table->string('guide1');
            $table->string('client1');
            $table->timestamps();
        }); 
    }    
};

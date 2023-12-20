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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('guide');
            $table->text('conveyor')->nullable();
            $table->string('client')->nullable();
            $table->string('elaboration_date')->nullable();
            $table->string('origin')->nullable();
            $table->string('client_documentation')->nullable();
            $table->string('viv')->nullable();
            $table->string('addressee')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('destination_city')->nullable();
            $table->string('declared_value')->nullable();
            $table->string('parts')->nullable();
            $table->string('shipment_type')->nullable();
            $table->string('type_route')->nullable();
            $table->string('delivery_days')->nullable();
            $table->string('scheduled_date')->nullable();
            $table->string('presentation_date')->nullable();
            $table->string('delivery_appointments')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('causal_description')->nullable();
            $table->string('causal_amplification')->nullable();
            $table->string('causal_amplification2')->nullable();
            $table->string('responsible')->nullable();
            $table->string('time')->nullable();
            $table->string('return_status_fulfilled')->nullable();
            $table->string('return_date_fulfilled')->nullable();
            $table->string('department_of_origin')->nullable();
            $table->string('destination_department')->nullable();
            $table->string('weight')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};

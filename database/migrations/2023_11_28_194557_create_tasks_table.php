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
            $table->text('conveyor');
            $table->string('client');
            $table->string('elaboration_date');
            $table->string('origin');
            $table->string('client_documentation');
            $table->string('viv');
            $table->string('addressee');
            $table->string('address');
            $table->string('phone');
            $table->string('destination_city');
            $table->string('declared_value');
            $table->string('parts');
            $table->string('shipment_type');
            $table->string('type_route');
            $table->string('delivery_days');
            $table->string('scheduled_date');
            $table->string('presentation_date');
            $table->string('delivery_appointments');
            $table->string('delivery_status');
            $table->string('causal_description');
            $table->string('causal_amplification');
            $table->string('causal_amplification2');
            $table->string('responsible');
            $table->string('time');
            $table->string('return_status_fulfilled');
            $table->string('return_date_fulfilled');
            $table->string('department_of_origin');
            $table->string('destination_department');
            $table->string('weight');

            
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

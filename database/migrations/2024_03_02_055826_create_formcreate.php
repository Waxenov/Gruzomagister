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
        Schema::create('formcreate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_carrier')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'traffic', 'delivered'])->default('pending');
            $table->string('load_place');
            $table->string('unload_place');
            $table->string('cargo_type');
            $table->string('cargo_describe');
            $table->string('truck_type');
            $table->decimal('weight',10,1);
            $table->date('ready_date');
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic');
            $table->string('phone');
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('traffic_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formcreate');
    }
};

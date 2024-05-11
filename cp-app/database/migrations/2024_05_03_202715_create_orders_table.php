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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column:'workerId');
            $table->foreign('workerId')->references('id')->on('workers');
            $table->unsignedBigInteger(column:'companyId');
            $table->foreign('companyId')->references('id')->on('companies');
            $table->string(column:'dateTime');
            $table->string(column:'customer');
            // $table->string(column:'serviceId');
            $table->unsignedBigInteger(column:'serviceId');
            $table->foreign('serviceId')->references('id')->on('services');
            $table->string(column:'status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

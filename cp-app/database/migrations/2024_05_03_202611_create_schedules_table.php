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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            // $table->string(column:'workerId');
            $table->unsignedBigInteger(column:'workerId');
            $table->foreign('workerId')->references('id')->on('workers');
            // $table->string(column:'companyId');
            $table->unsignedBigInteger(column:'companyId');
            $table->foreign('companyId')->references('id')->on('companies');
            $table->string(column:'dateTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->nullable();
            $table->integer('payment_method_id')->nullable();
            $table->integer('ticket_number')->nullable();
            $table->string('date_emission')->nullable();
            $table->string('time_emission')->nullable();
            $table->decimal('total_base_price');
            $table->decimal('total_tax_price');
            $table->decimal('total_price');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};

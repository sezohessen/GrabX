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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->boolean('pickup')->nullable();
            $table->boolean('deliverly')->nullable();
            $table->integer('discount')->nullable();
            $table->decimal('subtotal',10,2);
            $table->decimal('deliverly_cost',10,2);
            $table->integer('status');
            $table->decimal('total',10,2);
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
        Schema::dropIfExists('orders');
    }
};

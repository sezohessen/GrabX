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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->integer('type');

            $table->bigInteger('order_id')->unsigned()->nullable();
            $table->foreign('order_id')
            ->references('id')->on('orders')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->bigInteger('governorate_id')->unsigned()->nullable();
            $table->foreign('governorate_id')
            ->references('id')->on('governorates')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->foreign('city_id')
            ->references('id')->on('cities')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->string('make')->nullable();
            $table->string('color')->nullable();
            $table->string('license')->nullable();

            $table->integer('unit_type')->nullable();
            $table->text('street')->nullable();
            $table->text('house_num')->nullable();
            $table->text('special_direction')->nullable();
            $table->decimal('deliverly_cost',10,2)->nullable();
            $table->decimal('total',10,2);
            $table->decimal('amount',10,2);
            $table->integer('status');


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
        Schema::dropIfExists('payments');
    }
};

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
        Schema::create('cart_item_options', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cart_id')->unsigned();
            $table->foreign('cart_id')
            ->references('id')->on('carts')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')
            ->references('id')->on('products')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('qty')->nullable();
            $table->bigInteger('product_select_option_item_id')->unsigned()->nullable();
            $table->foreign('product_select_option_item_id')
            ->references('id')->on('product_select_option_items')
            ->onDelete('set null')
            ->onUpdate('cascade');
            
            $table->integer('copy_num')->default(1);
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
        Schema::dropIfExists('cart_item_options');
    }
};

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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->text('desc')->nullable();
            $table->text('desc_ar')->nullable();
            $table->text('ACCESS_CODE')->nullable();
            $table->text('MERCHANT_SECRET_KEY')->nullable();
            $table->text('MERCHANT_IV')->nullable();
            $table->text('MERCHANT_CODE')->nullable();
            $table->bigInteger('logo_id')->unsigned()->nullable();
            $table->foreign('logo_id')
            ->references('id')->on('images')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->bigInteger('bg_id')->unsigned()->nullable();
            $table->foreign('bg_id')
            ->references('id')->on('images')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('settings');
    }
};

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
        Schema::create('compliments', function (Blueprint $table) {
            $table->id();
            $table->string('manifest',60);
            $table->string('client',60)->nullable();
            $table->string('plate',10);
            $table->string('identity_card',60)->nullable();
            $table->string('compliment_date',60)->nullable();
            $table->string('payment_date',60)->nullable();
            $table->string('observations',60)->nullable();
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
        Schema::dropIfExists('compliments');
    }
};

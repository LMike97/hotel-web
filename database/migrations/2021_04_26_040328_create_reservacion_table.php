<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bedroom_id');
            $table->foreign('bedroom_id')->references('id')->on('bedrooms');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('guest_name', 45);
            $table->date('initial_date');
            $table->date('final_date');
            $table->integer('number_bedrooms');
            $table->string('telephone', 12);
            $table->string('email');
            $table->text('special_petition', 200)->nullable();
            $table->float('total_price');
            $table->string('status', 10);
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
        Schema::dropIfExists('reservations');
    }
}

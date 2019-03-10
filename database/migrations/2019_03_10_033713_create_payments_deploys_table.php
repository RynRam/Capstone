<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsDeploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reservations_id')->unsigned();
            $table->foreign('reservations_id')->references('id')->on('reservations');
            $table->dateTime('date_invoice')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('amount_payment');
            $table->integer('balance');
            $table->integer('change');
            $table->decimal('percentage');
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
}

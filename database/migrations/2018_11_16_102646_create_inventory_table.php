<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_code');
            $table->string('item_name');
            $table->integer('inventory_categories_id')->unsigned();
            $table->foreign('inventory_categories_id')->references('id')->on('inventory_categories');
            $table->integer('price');
            $table->integer('stock_on_hand');
            $table->boolean('is_active')->default(true);   

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
        Schema::dropIfExists('inventories');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesDeployTable extends Migration
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
            $table->integer('warehouses_id')->unsigned()->default(1);
            $table->foreign('warehouses_id')->references('id')->on('warehouses');
            $table->integer('inventory_categories_id')->unsigned();
            $table->foreign('inventory_categories_id')->references('id')->on('inventory_categories');
            $table->integer('price');
            $table->integer('stock_on_hand');
            $table->integer('damage')->default(0);
            $table->integer('defect')->default(0);
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

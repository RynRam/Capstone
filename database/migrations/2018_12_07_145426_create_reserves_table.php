<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
           $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('contact');
            $table->string('address');
            $table->string('venuename');
            $table->integer('package_id')->unsigned();
            $table->foreign('package_id')->references('id')->on('packages');
            $table->date('eventdate');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('caterings');
             $table->integer('total'); 
            $table->integer('guest');
            $table->boolean('is_approved')->default(false);
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
        Schema::dropIfExists('reserves');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnnameToCateringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caterings', function (Blueprint $table) {
            $table->renameColumn('categoryId', 'event_categories_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caterings', function (Blueprint $table) {
            $table->dropForeign('event_categories_id');
        });
    }
}

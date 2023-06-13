<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewXyzSellHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_xyz_sell_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('s_id');
            $table->unsignedBigInteger('p_id');
            $table->string('s_name', 25);
            $table->string('s_code', 10);
            $table->decimal('xyz_price', 10, 2);
            $table->decimal('p_price', 10, 2);
            $table->timestamp('created_at')->nullable();           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_xyz_sell_history');
    }
}

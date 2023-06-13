<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXyzPriceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xyz_price_lists', function (Blueprint $table) {
            $table->char('p_id', 36);
            $table->unsignedBigInteger('s_id');
            $table->decimal('p_price_list', 10, 2);
            $table->decimal('xyz_price', 10, 2);
            $table->timestamps();
            $table->primary('p_id');
            $table->foreign('s_id')
                  ->references('id')
                  ->on('services_registry')
                  ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xyz_price_lists');
    }
}

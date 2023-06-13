<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointRegistryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_registry', function (Blueprint $table) {
            $table->char('p_id', 36);
            $table->string('p_name', 60);
            $table->string('p_address', 100);
            $table->string('p_city', 60);
            $table->tinyInteger('p_zip', 5);
            $table->string('p_phone', 20);
            $table->string('p_email', 70);
            $table->string('p_referal_name', 100)->nullable();
            $table->string('p_vat_number', 11);
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
        Schema::dropIfExists('point_registry');
    }
}

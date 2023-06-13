<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewWebServicesRegistryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_web_services_registry', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_name', 25);
            $table->string('s_code', 10);
            $table->text('s_description');
            $table->decimal('xyz_price', 10, 2);
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
        Schema::dropIfExists('view_web_services_registry');
    }
}

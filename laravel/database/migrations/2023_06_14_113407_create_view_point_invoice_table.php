<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateViewPointInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('point_invoice', function (Blueprint $table) {
            $table->id();
            $table->string('p_name', 60);
            $table->string('p_address', 100);
            $table->string('p_city', 60);
            $table->tinyInteger('p_zip');
            $table->string('p_email', 70);
            $table->string('p_vat_number', 11);
            $table->string('xyz_name', 60);
            $table->string('xyz_address', 100);
            $table->string('xyz_city', 60);
            $table->tinyInteger('xyz_zip');
            $table->string('xyz_email', 70);
            $table->string('xyz_vat_number', 11);
            $table->unsignedBigInteger('id_purchase_point_history');
            $table->decimal('p_total_invoice_amount', 10, 2);
            $table->timestamps();
        });
        /*
        DB::statement("
        CREATE VIEW view_point_invoice AS
        SELECT
            ph.name AS p_name,
            p.address AS p_address,
            p.city AS p_city,
            p.zip AS p_zip,
            p.email AS p_email,
            p.vat_number AS p_vat_number,
            xyz.name AS xyz_name,
            xyz.address AS xyz_address,
            xyz.city AS xyz_city,
            xyz.zip AS xyz_zip,
            xyz.email AS xyz_email,
            xyz.vat_number AS xyz_vat_number,
            ph.id AS id_purchase_point_history,
            ph.p_total_invoice_amount
        FROM
            view_point_purchase_history ph
        JOIN
            services_registry xyz ON ph.s_id = xyz.id
        JOIN
            xyz_price_lists p ON ph.p_id = p.id
    ");
    */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('view_point_invoice', function (Blueprint $table) {
            //
        });
    }
}

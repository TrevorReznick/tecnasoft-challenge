<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewPointInvoice extends Model
{
    use HasFactory;

    protected $table = 'my_table';

    protected $fillable = [
        'p_name',
        'p_address',
        'p_city',
        'p_zip',
        'p_email',
        'p_vat_number',
        'xyz_name',
        'xyz_address',
        'xyz_city',
        'xyz_zip',
        'xyz_email',
        'xyz_vat_number',
        'id_purchase_point_history',
        'p_total_invoice_amount',
    ];
}

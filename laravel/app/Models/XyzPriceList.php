<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XyzPriceList extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_price_list',
        'xyz_price',
    ];

    public function serviceRegistry()
    {
        return $this->belongsTo(ServiceRegistry::class, 's_id');
    }

    public function pointRegistry()
    {
        return $this->belongsTo(PointRegistry::class, 'p_id');
    }
}

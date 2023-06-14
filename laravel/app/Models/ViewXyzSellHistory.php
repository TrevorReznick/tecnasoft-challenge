<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewXyzSellHistory extends Model
{
    use HasFactory;

    protected $table = 'view_xyz_sell_history';

    public function service()
    {
        return $this->belongsTo(ServiceRegistry::class, 's_id');
    }

    public function product()
    {
        return $this->belongsTo(ProductRegistry::class, 'p_id');
    }
}

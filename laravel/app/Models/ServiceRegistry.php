<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRegistry extends Model
{
    use HasFactory;

    protected $table = 'services_registry';

    protected $fillable = [
        's_name',
        's_code',
        's_description',
    ];

    public function xyzPriceLists()
    {
        return $this->hasMany(XyzPriceList::class, 's_id');
    }
}

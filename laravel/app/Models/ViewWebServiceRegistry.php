<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewWebServiceRegistry extends Model
{
    use HasFactory;

    protected $table = 'view_web_services_registry';

    public function xyzPriceLists()
    {
        return $this->hasMany(XyzPriceList::class, 's_id');
    }
}

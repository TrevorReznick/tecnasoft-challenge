<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PointRegistry extends Authenticatable
{
    use HasFactory;

    protected $table = 'point_registry';
    protected $primaryKey = 'p_id';
    public $incrementing = false;
    protected $guarded = [
        'p_id',
    ];
    

    protected $fillable = [
        'p_name',
        'p_address',
        'p_city',
        'p_phone',
        'p_email',
        'p_referal_name',
        'p_vat_number',
        'created_at',
        'updated_at',
    ];    

    public function getKeyName()
    {
        return 'p_id';
    }

    public function xyzPriceLists()
    {
        return $this->hasMany(XyzPriceList::class, 'p_id');
    }
}

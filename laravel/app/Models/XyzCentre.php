<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XyzCentre extends Model
{
    use HasFactory;

    protected $table = 'xyz_centre';

    protected $fillable = [
        'create_at',
        'is_active'
    ];

    protected $guarded = [
        'p_id',
    ];
}
